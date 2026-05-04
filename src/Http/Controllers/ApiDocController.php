<?php

namespace Hoaid\ApiDoc\Http\Controllers;

use Illuminate\Routing\Controller;

class ApiDocController extends Controller
{
    /**
     * Display the API Documentation UI.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('apidoc::scalar', [
            'specUrl' => url(config('apidoc.route', '/api-docs') . '/json'), // Mặc định dùng route tự động
            'theme' => config('apidoc.ui.theme', 'default'),
            'layout' => config('apidoc.ui.layout', 'modern'),
            'hideModels' => config('apidoc.ui.hideModels', false),
            'hideDownloadButton' => config('apidoc.ui.hideDownloadButton', false),
        ]);
    }

    /**
     * Tự động quét các API Route và trả về dạng OpenAPI JSON
     */
    public function json()
    {
        $routes = \Illuminate\Support\Facades\Route::getRoutes();
        $paths = [];

        foreach ($routes as $route) {
            // Chỉ lấy các route thuộc nhóm API
            if (!str_starts_with($route->uri(), 'api/')) {
                continue;
            }

            $uri = '/' . ltrim($route->uri(), '/');
            if (!isset($paths[$uri])) {
                $paths[$uri] = [];
            }

            foreach ($route->methods() as $method) {
                if ($method === 'HEAD' || $method === 'OPTIONS') continue;
                $methodLower = strtolower($method);
                
                // Tự động group dựa trên prefix sau 'api/'
                $uriWithoutApi = ltrim(substr($route->uri(), 4), '/');
                $segments = explode('/', $uriWithoutApi);
                $groupName = !empty($segments[0]) ? ucfirst($segments[0]) : 'General';

                // Tự động phân tích parameters từ URL (ví dụ {user})
                $parameters = [];
                preg_match_all('/\{([a-zA-Z0-9_]+)\}/', $uri, $matches);
                if (!empty($matches[1])) {
                    foreach ($matches[1] as $param) {
                        $parameters[] = [
                            'name' => $param,
                            'in' => 'path',
                            'required' => true,
                            'schema' => ['type' => 'string']
                        ];
                    }
                }

                $paths[$uri][$methodLower] = [
                    'tags' => [$groupName], // Nhóm các API lại với nhau
                    'summary' => $route->getName() ?: "Endpoint " . strtoupper($method) . " " . $uri,
                    'parameters' => $parameters,
                    'responses' => [
                        '200' => [
                            'description' => 'Successful response'
                        ]
                    ]
                ];
            }
        }

        return response()->json([
            'openapi' => '3.0.0',
            'info' => [
                'title' => 'Auto-generated API Docs',
                'version' => '1.0.0',
                'description' => 'Tài liệu API được tạo tự động từ Laravel Routes.'
            ],
            'paths' => (empty($paths) ? new \stdClass() : $paths),
        ]);
    }
}
