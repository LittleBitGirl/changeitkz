<?php

return [
    [
        'key'   => 'account',
        'name'  => 'shop::app.layouts.my-account',
        'route' =>'customer.profile.index',
        'sort'  => 1,
    ], [
        'key'   => 'account.profile',
        'name'  => 'shop::app.layouts.profile',
        'route' =>'customer.profile.index',
        'sort'  => 2,
    ], [
        'key'   => 'account.donelist',
        'name'  => 'shop::app.layouts.donelist',
        'route' =>'customer.donelist.index',
        'sort'  => 3,
    ], [
        'key'   => 'account.wishlist',
        'name'  => 'shop::app.layouts.wishlist',
        'route' => 'customer.wishlist.index',
        'sort'  => 4,
    ], [
        'key'   => 'account.reviews',
        'name'  => 'shop::app.layouts.reviews',
        'route' =>'customer.reviews.index',
        'sort'  => 5,
    ], [
        'key'   => 'account.achievementlist',
        'name'  => 'shop::app.layouts.achievements',
        'route' => 'customer.achievements.index',
        'sort'  => 6,
    ], [
        'key'   => 'account.downloadables',
        'name'  => 'shop::app.layouts.downloadable-products',
        'route' => 'customer.offer.index',
        'sort'  => 7,
    ]
];

?>