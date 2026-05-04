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
            'specUrl' => config('apidoc.spec_url', '/openapi.json'),
            'theme' => config('apidoc.ui.theme', 'default'),
            'layout' => config('apidoc.ui.layout', 'modern'),
            'hideModels' => config('apidoc.ui.hideModels', false),
            'hideDownloadButton' => config('apidoc.ui.hideDownloadButton', false),
        ]);
    }
}
