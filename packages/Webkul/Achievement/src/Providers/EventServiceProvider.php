<?php

namespace Webkul\Achievement\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('catalog.attribute.delete.before', 'Webkul\Achievement\Listeners\Achievement@afterAchievementDeleted');

        Event::listen('catalog.product.create.after', 'Webkul\Achievement\Listeners\Achievement@afterAchievementCreated');

        Event::listen('catalog.product.update.after', 'Webkul\Achievement\Listeners\Achievement@afterAchievementUpdated');
    }
}