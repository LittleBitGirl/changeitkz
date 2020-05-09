{!! view_render_event('bagisto.shop.products.add_to_cart.before', ['product' => $product]) !!}

<button type="submit" style="width: auto; height: auto; text-transform: none;" class="btn btn-md btn-black addtocart" {{ ! $product->isSaleable() ? 'disabled' : '' }}>
    {{ __('shop::app.products.add-to-cart') }}
</button>


{!! view_render_event('bagisto.shop.products.add_to_cart.after', ['product' => $product]) !!}