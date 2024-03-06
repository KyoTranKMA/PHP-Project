<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a38387b3563d6863abba005b6fe071d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Views\\' => 10,
            'App\\Models\\' => 11,
            'App\\Core\\' => 9,
            'App\\Controllers\\Auth\\' => 21,
            'App\\Controllers\\' => 16,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Views',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Core',
        ),
        'App\\Controllers\\Auth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers/Views',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\BaseController' => __DIR__ . '/../..' . '/App/Controllers/BaseController.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/App/Controllers/HomeController.php',
        'App\\Controllers\\IngredientController' => __DIR__ . '/../..' . '/App/Controllers/IngredientController.php',
        'App\\Controllers\\RecipeController' => __DIR__ . '/../..' . '/App/Controllers/RecipeController.php',
        'App\\Controllers\\RecipeUnitConverterController' => __DIR__ . '/../..' . '/App/Controllers/RecipeUnitConverterController.php',
        'App\\Controllers\\UploadFileErrorController' => __DIR__ . '/../..' . '/App/Controllers/UploadFileErrorController.php',
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/App/Controllers/UserController.php',
        'App\\Core\\Database' => __DIR__ . '/../..' . '/App/Core/Database.php',
        'App\\Models\\BaseModel' => __DIR__ . '/../..' . '/App/Models/BaseModel.php',
        'App\\Models\\IngredientModel' => __DIR__ . '/../..' . '/App/Models/IngredientModel.php',
        'App\\Models\\RecipeModel' => __DIR__ . '/../..' . '/App/Models/RecipeModel.php',
        'App\\Models\\UserModel' => __DIR__ . '/../..' . '/App/Models/UserModel.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a38387b3563d6863abba005b6fe071d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a38387b3563d6863abba005b6fe071d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a38387b3563d6863abba005b6fe071d::$classMap;

        }, null, ClassLoader::class);
    }
}