<?php
    $customer = auth()->guard('customer')->user();
    $recommendedProducts = $customer->recommended_products();
?>

@if ($recommendedProducts->count())
    <div class="attached-products-wrapper">
        <div class="title">
            {{ __('shop::app.products.recommended-product-title') }}
            <span class="border-bottom"></span>
        </div>

        <div class="product-grid-4">

            @foreach ($recommendedProducts as $recommended_product)

                @include ('shop::products.list.card', ['product' => $recommended_product])

            @endforeach

        </div>

    </div>
@endif