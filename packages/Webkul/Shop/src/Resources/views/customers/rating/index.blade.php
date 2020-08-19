<link rel="stylesheet" href="{{ asset('custom/css/rating.css') }}">

<div class="featured-heading center-block" style="text-align: center; font-size: large;">
    {{__('shop::app.rating.header')}}<br/>

    <span class="featured-seperator" style="color:lightgrey;">____________</span>
</div>

<section class="top-users">
    <div id="rating-top" class="product-grid-1">
        @foreach (app('Webkul\Customer\Repositories\CustomerRepository')->getTop() as $user)

            @include ('shop::customers.rating.card', ['Admin' => $user])

        @endforeach

    </div>
</section>