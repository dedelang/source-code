<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit719729e2b0dadf0fef9b94ae19318d8a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'D' => 
        array (
            'Dedelang\\' => 9,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'Dedelang\\' => 
        array (
            0 => __DIR__ . '/..' . '/Dedelang',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers',
        ),
    );

    public static $classMap = array (
        'Controllers\\UserController' => __DIR__ . '/../..' . '/App/Controllers/UserController.php',
        'Controllers\\WelcomeController' => __DIR__ . '/../..' . '/App/Controllers/WelcomeController.php',
        'Dedelang\\Engine\\Application' => __DIR__ . '/..' . '/Dedelang/Engine/Application.php',
        'Dedelang\\Engine\\Controller' => __DIR__ . '/..' . '/Dedelang/Engine/Controller.php',
        'Dedelang\\Engine\\DB\\Knex' => __DIR__ . '/..' . '/Dedelang/Engine/DB/Knex.php',
        'Dedelang\\Engine\\DB\\Query' => __DIR__ . '/..' . '/Dedelang/Engine/DB/Query.php',
        'Dedelang\\Engine\\DotEnv\\DotEnv' => __DIR__ . '/..' . '/Dedelang/Engine/DotEnv/DotEnv.php',
        'Dedelang\\Engine\\Loader' => __DIR__ . '/..' . '/Dedelang/Engine/Loader.php',
        'Dedelang\\Engine\\Route' => __DIR__ . '/..' . '/Dedelang/Engine/Route.php',
        'Dedelang\\Engine\\Security\\Attack' => __DIR__ . '/..' . '/Dedelang/Engine/Security/Attack.php',
        'Dedelang\\Engine\\URL' => __DIR__ . '/..' . '/Dedelang/Engine/URL.php',
        'Dedelang\\Engine\\Validate' => __DIR__ . '/..' . '/Dedelang/Engine/Validate.php',
        'Dedelang\\Http\\Cookie' => __DIR__ . '/..' . '/Dedelang/Http/Cookie.php',
        'Dedelang\\Http\\Request' => __DIR__ . '/..' . '/Dedelang/Http/Request.php',
        'Dedelang\\Http\\Session' => __DIR__ . '/..' . '/Dedelang/Http/Session.php',
        'Dedelang\\Http\\Url' => __DIR__ . '/..' . '/Dedelang/Http/Url.php',
        'Dedelang\\Library\\Authentication' => __DIR__ . '/..' . '/Dedelang/Library/Authentication.php',
        'Dedelang\\View\\Html' => __DIR__ . '/..' . '/Dedelang/View/Html.php',
        'Dedelang\\View\\View' => __DIR__ . '/..' . '/Dedelang/View/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit719729e2b0dadf0fef9b94ae19318d8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit719729e2b0dadf0fef9b94ae19318d8a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit719729e2b0dadf0fef9b94ae19318d8a::$classMap;

        }, null, ClassLoader::class);
    }
}
