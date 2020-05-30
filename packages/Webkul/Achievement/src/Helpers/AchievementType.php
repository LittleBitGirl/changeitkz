<?php

namespace Webkul\Achievement\Helpers;

use Webkul\Achievement\Type\AbstractType;

class AchievementType extends AbstractProduct
{
    /**
     * Checks if a ProductType may have variants
     *
     * @param string $typeKey as defined in config('achievement_types)
     * @return bool whether ProductType is able to have variants
     */
    public static function hasVariants(string $typeKey): bool
    {
        /** @var AbstractType $type */
        $type = app(config('achievement_types.' . $typeKey . '.class'));

        return $type->hasVariants();
    }

    /**
     * Get all ProductTypes that are allowed to have variants
     *
     * @return array of achievement_types->keys
     */
    public static function getAllTypesHavingVariants(): array
    {
        $havingVariants = [];

        foreach (config('achievement_types') as $type) {
            if (self::hasVariants($type['key'])) {
                array_push($havingVariants, $type['key']);
            }
        }

        return $havingVariants;
    }
}