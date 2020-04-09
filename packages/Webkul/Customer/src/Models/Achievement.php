<?php


namespace Webkul\Customer\Models;


use Illuminate\Database\Eloquent\Model;

class Achievement extends Model{

    protected $table = 'achievements';

    protected $fillable = ['name', 'num_of_points', 'path'];

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customers_achievements',
            'achievement_id', 'customer_id');
    }
}