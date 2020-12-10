<?php

namespace Modules\IACoreModule\Providers;

use Illuminate\Support\ServiceProvider;

class IACoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register loaders
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'IACoreModule');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'IACoreModule');

        $this->app['router']->aliasMiddleware('IACoreMiddleware', \Modules\IACoreModule\Middleware\IACoreMiddleware::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    public function registerConfig()
    {
        return config(
            [
//                'filesystems.disks.posts' => [
//                    'driver' => 'local',
//                    'root' => __DIR__ . '/../storage/uploads',
//                    'url' => url(__DIR__ . '/../storage/uploads'),
//                    'visibility' => 'public',
//                ]
            ]
        );
    }
}