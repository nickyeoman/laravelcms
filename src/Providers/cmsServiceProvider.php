<?php
declare(strict_types=1);

namespace NickYeoman\DataObjects\Providers;

use Illuminate\Support\ServiceProvider;

final class cmsServiceProvider extends ServiceProvider

{

    public function boot(): void

    {

        // Configuration
        $this->publishes([
            __DIR__.'/../config/cms.php' => config_path('cms.php'),
        ]);

        // Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'cms');

    }

}