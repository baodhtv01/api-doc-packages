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
    | By default, this package automatically generates a basic spec at /api-docs/json.
    |
    */
    'spec_url' => '/api-docs/json',

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
