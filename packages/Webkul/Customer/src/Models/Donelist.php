<?php

namespace Webkul\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Product\Models\ProductProxy;
use Webkul\Customer\Contracts\Donelist as DonelistContract;

class Donelist extends Model implements DonelistContract
{
    protected $table = 'donelist';

    protected $casts = [
        'additional' => 'array',
    ];

    protected $fillable = [
        'channel_id',
        'product_id',
        'customer_id',
        'additional',
        'moved_to_wishlist',
        'shared',
        'time_of_moving'
    ];

    /**
     * The Product that belong to the donelist.
     */
    public function product()
    {
        return $this->hasOne(ProductProxy::modelClass(), 'id', 'product_id');
    }
}
