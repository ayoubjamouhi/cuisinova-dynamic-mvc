<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b620700bc2f5f0e6f64a9cb26ba5bb0
{
    public static $classMap = array (
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/app/controllers/AdminController.php',
        'App\\Controllers\\ClientsController' => __DIR__ . '/../..' . '/app/controllers/ClientsController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Db\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ArticleAPI' => __DIR__ . '/../..' . '/core/API/ArticleAPI.php',
        'ComposerAutoloaderInit9b620700bc2f5f0e6f64a9cb26ba5bb0' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit9b620700bc2f5f0e6f64a9cb26ba5bb0' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'ImagesAPI' => __DIR__ . '/../..' . '/core/API/ImagesAPI.php',
        'UsersAPI' => __DIR__ . '/../..' . '/core/API/UsersAPI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9b620700bc2f5f0e6f64a9cb26ba5bb0::$classMap;

        }, null, ClassLoader::class);
    }
}