<?php

namespace Webkul\Achievement\Type;

class Number extends AbstractType
{

    /**
     * These blade files will be included in achievement edit page
     * 
     * @var array
     */
    protected $additionalViews = [
        'admin::catalog.achievements.accordians.images',
        'admin::catalog.achievements.accordians.channels',
    ];

}