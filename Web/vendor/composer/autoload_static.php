<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a38387b3563d6863abba005b6fe071d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Views\\' => 10,
            'App\\Operations\\' => 15,
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
        'App\\Operations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models/Operations',
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
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/App/Controllers/AdminController.php',
        'App\\Controllers\\BaseController' => __DIR__ . '/../..' . '/App/Controllers/BaseController.php',
        'App\\Controllers\\BmiController' => __DIR__ . '/../..' . '/App/Controllers/BmiController.php',
        'App\\Controllers\\Dialog' => __DIR__ . '/../..' . '/App/Controllers/Dialog.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/App/Controllers/HomeController.php',
        'App\\Controllers\\IngredientController' => __DIR__ . '/../..' . '/App/Controllers/IngredientController.php',
        'App\\Controllers\\PaginationController' => __DIR__ . '/../..' . '/App/Controllers/PaginationController.php',
        'App\\Controllers\\RecipeController' => __DIR__ . '/../..' . '/App/Controllers/RecipeController.php',
        'App\\Controllers\\RecipeUnitConverterController' => __DIR__ . '/../..' . '/App/Controllers/RecipeUnitConverterController.php',
        'App\\Controllers\\UploadFileErrorController' => __DIR__ . '/../..' . '/App/Controllers/UploadFileErrorController.php',
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/App/Controllers/UserController.php',
        'App\\Core\\Database' => __DIR__ . '/../..' . '/App/Core/Database.php',
        'App\\Core\\Logger' => __DIR__ . '/../..' . '/App/Core/Logger.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'App\\Models\\BaseModel' => __DIR__ . '/../..' . '/App/Models/BaseModel.php',
        'App\\Models\\IngredientModel' => __DIR__ . '/../..' . '/App/Models/IngredientModel.php',
        'App\\Models\\NutritionCalculator' => __DIR__ . '/../..' . '/App/Models/NutritionCalculator.php',
        'App\\Models\\RecipeModel' => __DIR__ . '/../..' . '/App/Models/RecipeModel.php',
        'App\\Models\\UserModel' => __DIR__ . '/../..' . '/App/Models/UserModel.php',
        'App\\Operations\\DatabaseRelatedOperation' => __DIR__ . '/../..' . '/App/Models/Operations/DatabaseRelatedOperation.php',
        'App\\Operations\\ErrorFileUpload' => __DIR__ . '/../..' . '/App/Models/Operations/ErrorFileUpload.php',
        'App\\Operations\\I_CreateAndUpdateOperation' => __DIR__ . '/../..' . '/App/Models/Operations/I_CreateAndUpdateOperation.php',
        'App\\Operations\\I_DeleteOperation' => __DIR__ . '/../..' . '/App/Models/Operations/I_DeleteOperation.php',
        'App\\Operations\\I_ReadOperation' => __DIR__ . '/../..' . '/App/Models/Operations/I_ReadOperation.php',
        'App\\Operations\\IngredientCreateOperation' => __DIR__ . '/../..' . '/App/Models/Operations/IngredientCreateOperation.php',
        'App\\Operations\\IngredientReadOperation' => __DIR__ . '/../..' . '/App/Models/Operations/IngredientReadOperation.php',
        'App\\Operations\\IngredientUpdateOperation' => __DIR__ . '/../..' . '/App/Models/Operations/IngredientUpdateOperation.php',
        'App\\Operations\\RecipeCreateOperation' => __DIR__ . '/../..' . '/App/Models/Operations/RecipeCreateOperation.php',
        'App\\Operations\\RecipeDeleteOperation' => __DIR__ . '/../..' . '/App/Models/Operations/RecipeDeleteOperation.php',
        'App\\Operations\\RecipeReadOperation' => __DIR__ . '/../..' . '/App/Models/Operations/RecipeReadOperation.php',
        'App\\Operations\\RecipeUpdateOperation' => __DIR__ . '/../..' . '/App/Models/Operations/RecipeUpdateOperation.php',
        'App\\Operations\\UploadImageOperation' => __DIR__ . '/../..' . '/App/Models/Operations/UploadImageOperation.php',
        'App\\Views\\ViewRender' => __DIR__ . '/../..' . '/App/Views/ViewRender.php',
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
