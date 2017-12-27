<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f4e9483794a05a088192e6cc6586a09
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'ErrorHandler' => __DIR__ . '/../..' . '/composer-setup.php',
        'HttpClient' => __DIR__ . '/../..' . '/composer-setup.php',
        'Installer' => __DIR__ . '/../..' . '/composer-setup.php',
        'Post' => __DIR__ . '/../..' . '/Post.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Task' => __DIR__ . '/../..' . '/Task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4f4e9483794a05a088192e6cc6586a09::$classMap;

        }, null, ClassLoader::class);
    }
}
