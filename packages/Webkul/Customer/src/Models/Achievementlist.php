<?php

namespace Webkul\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Achievement\Contracts\Achievement as AchievementContract;
use Webkul\Achievement\Models\AchievementProxy;

class Achievementlist extends Model implements AchievementContract
{
    protected $table = 'customers_achievements';

    protected $fillable = [
        'customer_id',
        'achievement_id',
    ];

    /**
     * The Achievement that belong to the list.
     */
    public function achievements()
    {
        return $this->hasMany(AchievementProxy::modelClass(), 'id','achievement_id');
    }

    /**
     * The Customer that is owner of the list.
     */
    public function customer()
    {
        return $this->belongsTo(CustomerProxy::modelClass(), 'id','customer_id');
    }
}
