<?php

return [
    /*
    |--------------------------------------------------------------------------
    | API Documentation Route
    |--------------------------------------------------------------------------
    |
    | The path where the API documentation will be accessible.
    |
    */
    'route' => '/api-docs',

    /*
    |--------------------------------------------------------------------------
    | OpenAPI Specification URL
    |--------------------------------------------------------------------------
    |
    | The URL or local path to your openapi.json or openapi.yaml file.
    | This can be an absolute URL or a path relative to the public directory.
    |
    */
    'spec_url' => '/openapi.json',

    /*
    |--------------------------------------------------------------------------
    | Scalar UI Configuration
    |--------------------------------------------------------------------------
    |
    | Customize the appearance of the Scalar UI.
    | See: https://github.com/scalar/scalar
    |
    */
    'ui' => [
        'theme' => 'default', // 'default', 'moon', 'purple', 'solarized', 'bluePlanet', etc.
        'layout' => 'modern', // 'modern' or 'classic'
        'hideModels' => false,
        'hideDownloadButton' => false,
    ],
];
