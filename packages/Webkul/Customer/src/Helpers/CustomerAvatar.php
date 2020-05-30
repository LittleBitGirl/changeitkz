<?php

namespace Webkul\Customer\Helpers;

use Illuminate\Support\Facades\Storage;

class CustomerAvatar
{
    public function getUsersAvatar($customer)
    {
        $image = $customer->ava_path;

    }
}