<?php

namespace Webkul\Achievement\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Webkul\Core\Eloquent\Repository;

class AchievementRepository extends Repository
{

    /**
     * Create a new repository instance.
     *
     * @param  \Illuminate\Container\Container  $app
     * @return void
     */
    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Webkul\Achievement\Contracts\Achievement';
    }

    /**
     * @param  array  $data
     * @return \Webkul\Achievement\Contracts\Achievement
     */
    public function create(array $data)
    {
        Event::dispatch('catalog.achievement.create.before');

        $typeInstance = app(config('achievement_types.' . $data['type'] . '.class'));

        $achievement = $typeInstance->create($data);

        Event::dispatch('catalog.achievement.create.after', $achievement);

        return $achievement;
    }

    /**
     * @param  array  $data
     * @param  int  $id
     * @param  string  $attribute
     * @return \Webkul\Achievement\Contracts\Achievement
     */
    public function update(array $data, $id, $attribute = "id")
    {
        Event::dispatch('catalog.achievement.update.before', $id);

        $achievement = $this->find($id);

        $achievement = $achievement->getTypeInstance()->update($data, $id, $attribute);

        if (isset($data['channels'])) {
            $achievement['channels'] = $data['channels'];
        }

        Event::dispatch('catalog.achievement.update.after', $achievement);

        return $achievement;
    }

    /**
     * @param  int  $id
     * @return void
     */
    public function delete($id)
    {
        Event::dispatch('catalog.achievement.delete.before', $id);

        parent::delete($id);

        Event::dispatch('catalog.achievement.delete.after', $id);
    }


    /**
     * Search simple products for grouped product association
     *
     * @param  string  $term
     * @return \Illuminate\Support\Collection
     */
    public function searchPointAchievements($term)
    {
        return $this->scopeQuery(function($query) use($term) {
            $channel = request()->get('channel') ?: (core()->getCurrentChannelCode() ?: core()->getDefaultChannelCode());

            $locale = request()->get('locale') ?: app()->getLocale();

            return $query->distinct()
                         ->addSelect('achievements.*')
                         ->where('achievements.type', 'points')
                         ->where('achievements.channel', $channel)
                         ->where('achievements.locale', $locale)
                         ->where('achievements.name', 'like', '%' . urldecode($term) . '%')
                         ->orderBy('achievement_id', 'desc');
        })->get();
    }
}