<?php

namespace Webkul\Achievement\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Webkul\Achievement\Models\Achievement::class,
    ];
}