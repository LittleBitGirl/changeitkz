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
        Event::listen('achievement.reach.before', 'Webkul\Achievement\Listeners\Achievement@beforeAchievementReached');

        Event::listen('achievement.reach.after', 'Webkul\Achievement\Listeners\Achievement@afterAchievementReached');

        Event::listen('achievement.create.after', 'Webkul\Achievement\Listeners\Achievement@afterAchievementCreated');

        Event::listen('achievement.update.after', 'Webkul\Achievement\Listeners\Achievement@afterAchievementUpdated');
    }
}