<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4d297c2ce34d5983ef982322d64d63d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\homeController' => __DIR__ . '/../..' . '/App/Controllers/homeController.php',
        'App\\Models\\UserModel' => __DIR__ . '/../..' . '/App/Models/UserModel.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4d297c2ce34d5983ef982322d64d63d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4d297c2ce34d5983ef982322d64d63d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc4d297c2ce34d5983ef982322d64d63d::$classMap;

        }, null, ClassLoader::class);
    }
}
