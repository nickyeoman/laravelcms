<?php
declare(strict_types=1);

// TODO: https://laravel.com/docs/9.x/requests#configuring-trusted-hosts

namespace NickYeoman\laravelcms;

use Illuminate\Support\ServiceProvider;

class laravelcmsServiceProvider extends ServiceProvider {

    public function register() {
        
        // Controllers
        $this->app->make('NickYeoman\laravelcms\Controllers\AdminController'); // TODO: Do I need this?

    }

    public function boot(): void 
    {

        // Configuration
        $this->publishes([__DIR__.'/config/cms.php' => config_path('cms.php'),]);

        // Routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/admin.php');

        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // Views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'cms');

    }

}