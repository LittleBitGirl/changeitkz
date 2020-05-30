<?php

namespace Webkul\Achievement\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Attribute\Models\AttributeFamilyProxy;
use Webkul\Category\Models\CategoryProxy;
use Webkul\Attribute\Models\AttributeProxy;
use Webkul\Customer\Models\Customer;
use Webkul\Inventory\Models\InventorySourceProxy;
use Webkul\Achievement\Contracts\Achievement as AchievementContract;

class Achievement extends Model implements AchievementContract
{
    protected $table = 'achievements';

    protected $fillable = [
        'name',
        'num_of_points',
        'path'
    ];

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customers_achievements',
            'achievement_id', 'customer_id');
    }

    /**
     * The images that belong to the product.
     */
    public function getBaseImageUrlAttribute()
    {
        $image = $this->images()->first();

        return $image ? $image->url : null;
    }
    /**
     * Retrieve type instance
     *
     * @return AbstractType
     */
    public function getTypeInstance()
    {
        if ($this->typeInstance) {
            return $this->typeInstance;
        }

        $this->typeInstance = app(config('achievement_types.' . $this->type . '.class'));

        $this->typeInstance->setProduct($this);

        return $this->typeInstance;
    }

    /**
     * Overrides the default Eloquent query builder
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newEloquentBuilder($query)
    {
        return new \Webkul\Product\Database\Eloquent\Builder($query);
    }

    /**
     * Return the product id attribute.
     */
    public function getAchievementIdAttribute()
    {
        return $this->id;
    }

    /**
     * Return the product attribute.
     */
    public function getAchievementAttribute()
    {
        return $this;
    }
}