<?php


namespace Webkul\Customer\Helpers;

use Nwidart\Modules\Collection;
use Webkul\Customer\Models\CustomerRecommendation as UserRecommendation;
use Webkul\Product\Models\ProductFlat;

class CustomerRecommendation {

    public function getCustomerRecommendations(int $customerId)
    {
        $user_recommendations = UserRecommendation::where('customer_id', $customerId)->first();

        return $user_recommendations == null ? new Collection() : $this->makeRecommendationMatrix(json_decode($user_recommendations->keywords, true));
    }

    public function makeRecommendationMatrix($keywords)
    {
        asort($keywords);
        $products = ProductFlat::whereNotNull('meta_keywords')->get();
        $products->map(function ($item) use ($keywords) {
            foreach ($keywords as $keyword => $weight) {
                if ($keyword != '') {
                    if (strpos($item->meta_keywords, $keyword) !== false) {
                        $item['key_weight'] += 1;
                    }
                }
            }
        });
        $sorted = $products->sortByDesc('key_weight');

        return $sorted->whereNotNull('key_weight')->take(4);
    }

    public function makeRecommendations($user_id, $product_id)
    {
        $recommendation = UserRecommendation::where('customer_id', $user_id)->first();
        $product_keywords = ProductFlat::where('product_id', $product_id)->first()->meta_keywords;
        if ($recommendation != null && !empty($product_keywords)) {
            $product_keywords = explode(', ', $product_keywords);
            $user_keywords = json_decode($recommendation->keywords, true);
            if ($user_keywords == null) {
                $user_keywords = [];
            }
            foreach ($product_keywords as $product_keyword) {
                if (array_key_exists($product_keyword, $user_keywords)) {
                    $user_keywords[$product_keyword] += 1;
                } else {
                    $user_keywords[$product_keyword] = 1;
                }
            }
            $recommendation->keywords = json_encode($user_keywords);
            dd($recommendation);
            $recommendation->save();
        } else if ($recommendation == null && !empty($product_keywords)) {
            $product_keywords = explode(', ', $product_keywords);
            $recommendation = new UserRecommendation;
            $recommendation->customer_id = $user_id;
            $keywords = [];
            foreach ($product_keywords as $product_keyword) {
                if ($product_keyword !== '') {
                    $keywords[$product_keyword] = 1;
                }
            }
            $keywords['общее'] = 1;
            $recommendation->keywords = json_encode($keywords);
            dd($recommendation);
            $recommendation->save();
        }
        dd(ProductFlat::where('product_id', $product_id)->first());
    }

    public function makeFirstRecommendations($user_id)
    {
        $recommendation = new UserRecommendation;
        $recommendation->customer_id = $user_id;
        $recommendation->keywords = '{"общее":1}';
        $recommendation->save();
    }
}