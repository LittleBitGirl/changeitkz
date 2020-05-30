<?php

namespace Webkul\Achievement\Observers;

use Illuminate\Support\Facades\Storage;

class AchievementObserver
{
    /**
     * Handle the Achievement "deleted" event.
     *
     * @param  \Webkul\Achievement\Contracts\Achievement  $achievement
     * @return void
     */
    public function deleted($achievement)
    {
        Storage::deleteDirectory('product/' . $achievement->id);
    }
}