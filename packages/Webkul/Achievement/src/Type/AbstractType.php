<?php

namespace Webkul\Achievement\Type;

use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Boolean;
use Webkul\Achievement\Repositories\AchievementRepository;
use Webkul\Achievement\Helpers\AchievementImage;

abstract class AbstractType
{
    /**
     * ProductRepository instance
     *
     * @var \Webkul\Achievement\Repositories\AchievementRepository
     */
    protected $achievementRepository;

    /**
     * Product model instance
     *
     * @var \Webkul\Achievement\Contracts\Achievement
     */
    protected $achievement;

    /**
     * Is a composite product type
     *
     * @var bool
     */
    protected $isComposite = false;

    /**
     * Create a new product type instance.
     *
     * @param  \Webkul\Achievement\Repositories\AchievementRepository  $achievementRepository
     * @return void
     */
    public function __construct(
        AchievementRepository $achievementRepository
    )
    {

        $this->achievementRepository = $achievementRepository;
    }

    /**
     * @param  array  $data
     * @return \Webkul\Achievement\Contracts\Achievement
     */
    public function create(array $data)
    {
        return $this->achievementRepository->getModel()->create($data);
    }

    /**
     * @param  array  $data
     * @param  int  $id
     * @param  string  $attribute
     * @return \Webkul\Achievement\Contracts\Achievement
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $achievement = $this->achievementRepository->find($id);

        $achievement->update($data);

        $route = request()->route() ? request()->route()->getName() : "";

        return $achievement;
    }

    /**
     * Specify type instance product
     *
     * @param  \Webkul\Achievement\Contracts\Achievement  $achievement
     * @return \Webkul\Achievement\Type\AbstractType
     */
    public function setAchievement($achievement)
    {
        $this->achievement = $achievement;

        return $this;
    }

}