<?php

namespace Webkul\Achievement\Providers;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\ServiceProvider;
use Webkul\Achievement\Models\AchievementProxy;
use Webkul\Achievement\Observers\AchievementObserver;

class AchievementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->app->make(EloquentFactory::class)->load(__DIR__ . '/../Database/Factories');

        $this->app->register(EventServiceProvider::class);

        $this->publishes([
            dirname(__DIR__) . '/Config/imagecache.php' => config_path('imagecache.php'),
        ]);

        AchievementProxy::observe(AchievementObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerConfig();

        $this->registerEloquentFactoriesFrom(__DIR__ . '/../Database/Factories');
    }

    /**
     * Register Configuration
     *
     * @return void
     */
    public function registerConfig(): void
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/achievement_types.php', 'achievement_types'
        );
    }


    /**
     * Register factories.
     *
     * @param  string  $path
     * @return void
     */
    protected function registerEloquentFactoriesFrom($path): void
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }
}