{!! view_render_event('bagisto.shop.products.price.before', ['product' => $product]) !!}

<div class="product-price">
    {{ __('shop::app.products.you-get') }}
    {!! $product->getTypeInstance()->getPriceHtml() !!}
    {{ __('shop::app.products.for-challange') }}

</div>

{!! view_render_event('bagisto.shop.products.price.after', ['product' => $product]) !!}