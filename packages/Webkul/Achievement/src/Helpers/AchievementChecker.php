<?php

namespace Webkul\Achievement\Helpers;


use Webkul\Achievement\Models\Achievement;
use Webkul\Customer\Http\Controllers\AchievementlistController;
use Webkul\Customer\Models\Achievementlist;
use Webkul\Customer\Models\Donelist;

class AchievementChecker {

    public function checkAndSetPointReward($user)
    {
        $achievements = Achievement::where('type', 'point')->get();
        foreach ($achievements as $achievement) {
            if ($user->points >= $achievement->type_value
                && !$this->checkUserAlreadyHasReward($user, $achievement)
            ) {
                (new AchievementlistController)->store($user->id, $achievement->id);
                break;
            }
        }

    }

    public function checkAndSetNumberReward($user)
    {
        $achievements = Achievement::where('type', 'number')->get();
        $numOfDone = Donelist::where('customer_id', $user->id)->count();
        foreach ($achievements as $achievement) {
            if ($numOfDone >= $achievement->type_value
                && !$this->checkUserAlreadyHasReward($user, $achievement)
            ) {
                (new AchievementlistController)->store($user->id, $achievement->id);

                break;
            }
        }
    }

    public function checkUserAlreadyHasReward($user, $reward)
    {
        $userAchievement = Achievementlist::where('customer_id', $user->id)
            ->where('achievement_id', $reward->id)->first();
        $verdict = $userAchievement == null ? false : true;

        return $verdict;
    }

}