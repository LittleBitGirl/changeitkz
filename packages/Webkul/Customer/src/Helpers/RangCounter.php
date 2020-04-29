<?php


namespace Webkul\Customer\Helpers;


use Webkul\Customer\Models\Customer;

class RangCounter {

    public function getCustomersRang($customer)
    {
        return Customer::byRang($customer->points)->count();
    }
}