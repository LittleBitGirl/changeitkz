<?php

namespace Webkul\Product\Repositories;

use Illuminate\Container\Container as App;
use Webkul\Core\Eloquent\Repository;

class ProductOfferRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\Product\Contracts\ProductOffer';
    }

    /**
     * Retrieve review for customerId
     *
     * @param int $customerId
     */
    function getCustomerOffer()
    {
        $customerId = auth()->guard('customer')->user()->id;

        $offers = $this->model->where(['author_id'=> $customerId])->paginate(5);

        return $offers;
    }
}