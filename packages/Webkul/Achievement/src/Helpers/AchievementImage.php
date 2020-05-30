<?php

namespace Webkul\Achievement\Helpers;

use Illuminate\Support\Facades\Storage;

class AchievementImage extends AbstractAchievement
{
    /**
     * Retrieve collection of gallery images
     *
     * @param  \Webkul\Achievement\Contracts\Achievement|\Webkul\Achievement\Contracts\AchievementFlat  $achievement
     * @return array
     */
    public function getGalleryImages($achievement)
    {
        if (! $achievement) {
            return [];
        }

        $images = [];

        foreach ($achievement->images as $image) {
            if (! Storage::has($image->path))
                continue;

            $images[] = [
                'small_image_url'    => url('cache/small/' . $image->path),
                'medium_image_url'   => url('cache/medium/' . $image->path),
                'large_image_url'    => url('cache/large/' . $image->path),
                'original_image_url' => url('cache/original/' . $image->path),
            ];
        }

        if (! $achievement->parent_id && ! count($images)) {
            $images[] = [
                'small_image_url'    => asset('vendor/webkul/ui/assets/images/Achievement/small-Achievement-placeholder.png'),
                'medium_image_url'   => asset('vendor/webkul/ui/assets/images/Achievement/meduim-Achievement-placeholder.png'),
                'large_image_url'    => asset('vendor/webkul/ui/assets/images/Achievement/large-Achievement-placeholder.png'),
                'original_image_url' => asset('vendor/webkul/ui/assets/images/Achievement/large-Achievement-placeholder.png'),
            ];
        }

        return $images;
    }

    /**
     * Get Achievement's base image
     *
     * @param  \Webkul\Achievement\Contracts\Achievement|\Webkul\Achievement\Contracts\AchievementFlat  $achievement
     * @return array
     */
    public function getAchievementBaseImage($achievement)
    {
        $images = $achievement ? $achievement->images : null;

        if ($images && $images->count()) {
            $image = [
                'small_image_url'    => url('cache/small/' . $images[0]->path),
                'medium_image_url'   => url('cache/medium/' . $images[0]->path),
                'large_image_url'    => url('cache/large/' . $images[0]->path),
                'original_image_url' => url('cache/original/' . $images[0]->path),
            ];
        } else {
            $image = [
                'small_image_url'    => asset('vendor/webkul/ui/assets/images/Achievement/small-Achievement-placeholder.png'),
                'medium_image_url'   => asset('vendor/webkul/ui/assets/images/Achievement/meduim-Achievement-placeholder.png'),
                'large_image_url'    => asset('vendor/webkul/ui/assets/images/Achievement/large-Achievement-placeholder.png'),
                'original_image_url' => asset('vendor/webkul/ui/assets/images/Achievement/large-Achievement-placeholder.png'),
            ];
        }

        return $image;
    }
}