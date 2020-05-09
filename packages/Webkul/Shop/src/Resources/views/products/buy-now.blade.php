{!! view_render_event('bagisto.shop.products.buy_now.before', ['product' => $product]) !!}

@auth('customer')
    <span class="towishlist">
        <a href="{{ route('shop.movetodonelist', $product->id) }}" style="text-transform: none;" class="btn btn-md btn-black"> {{ __('shop::app.products.buy-now') }}</a>
    </span>
@endauth
{{--<button type="submit" class="btn btn-sm btn-black buynow" {{ ! $product->isSaleable(1) ? 'disabled' : '' }}>--}}
{{--    {{ __('shop::app.products.buy-now') }}--}}
{{--</button>--}}

{!! view_render_event('bagisto.shop.products.buy_now.after', ['product' => $product]) !!}