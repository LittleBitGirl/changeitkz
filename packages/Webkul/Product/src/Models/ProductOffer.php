<?php

namespace Webkul\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Customer\Models\CustomerProxy;
use Webkul\Product\Models\Product;
use Webkul\Product\Contracts\ProductOffer as ProductOfferContract;

class ProductOffer extends Model implements ProductOfferContract
{
    protected $fillable = [
        'name',
        'description',
        'info',
        'status',
        'author_id',
    ];

    /**
     * Get the product attribute family that owns the product.
     */
    public function author()
    {
        return $this->belongsTo(CustomerProxy::modelClass());
    }

}