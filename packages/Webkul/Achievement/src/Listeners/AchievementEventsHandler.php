<?php

namespace Webkul\Achievement\Listeners;

use Webkul\Customer\Models\Customer;
use Webkul\Achievement\Repositories\AchievementRepository;
class AchievementEventsHandler {

    public function onAchievementReached($event)
    {
        Customer::reward($event);
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen('achievement.after.reached', 'Webkul\Achievement\Listeners\AchievementEventsHandler@onAchievementReached');
    }
}