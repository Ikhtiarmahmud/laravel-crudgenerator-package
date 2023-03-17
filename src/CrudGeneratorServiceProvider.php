<?php

namespace Ikmi\CrudGenerator;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/app/Controllers/CategoryController.php' => app_path('/Http/Controllers/CategoryController.php'),
            __DIR__.'/app/Models/Category.php' => app_path('/Models/Category.php'),
            __DIR__.'/app/Requests/CategoryRequest.php' => app_path('/Http/Requests/CategoryRequest.php'),
            __DIR__.'/app/views/category' => base_path('/resources/views/category'),
        ]);

        if (!class_exists('CreateCategoriesTable')) {
            $this->publishes([
                __DIR__.'/app/Migrations/2023_03_16_064404_create_categories_table.php' 
                        => base_path('/database/migrations/2023_03_16_064404_create_categories_table.php'),
            ]);
        }

        $this->loadRoutesFrom(__DIR__.'/app/Routes/web.php');

        Artisan::call('migrate');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}