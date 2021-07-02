<?php

namespace MieProject\Posts;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class PostsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        // for this package
        require_once __DIR__ . '/helpers.php';

        (new playWithFiles)->run();

        $this->publishResources();
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__.'/views', 'mie-posts');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');


//        mie-posts
    }

    protected function publishResources()
    {
//        $this->publishes([
//            __DIR__ . '/database/seeders/PermissionsDemoSeeder.php' => database_path('seeders/PermissionsDemoSeeder.php'),
//        ]);

    }






}
