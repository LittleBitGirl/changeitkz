<?php


namespace Webkul\Customer\Models;


use Illuminate\Database\Eloquent\Model;

class CustomerRecommendation extends Model {

    protected $table = 'customer_recommendations';

    protected $fillable = [
        'customer_id',
        'keywords'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

}