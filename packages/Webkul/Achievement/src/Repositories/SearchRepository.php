<?php

namespace Webkul\Product\Repositories;

use Illuminate\Container\Container as App;
use Webkul\Core\Eloquent\Repository;
use Webkul\Achievement\Repositories\AchievementRepository;

class SearchRepository extends Repository
{
    /**
     * ProductRepository object
     *
     * @return Object
     */
    protected $achievementRepository;

    /**
     * Create a new repository instance.
     *
     * @param  Webkul\Product\Repositories\AchievementRepository $achievementRepository
     * @return void
     */
    public function __construct(
        ProductRepository $ProductRepository,
        App $app
    )
    {
        parent::__construct($app);

        $this->ProductRepository = $ProductRepository;
    }

    function model()
    {
        return 'Webkul\Product\Contracts\Product';
    }

}