<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    | By default, we're loading the Apolune\ApoluneServiceProvider which in
    | turn registers each Apolune component indepedently. Alternatively,
    | you may load only the Apolune components you see a need for.
    |
    */

    'providers' => [
        'Apolune\ApoluneServiceProvider',
    ],

    /*
    |--------------------------------------------------------------------------
    | Theme Service Provider
    |--------------------------------------------------------------------------
    |
    | Specify the Service Provider for the theme you would like to utilise.
    |
    */

    'theme' => 'pandaac\ThemeTibia\Providers\ThemeServiceProvider',

];
