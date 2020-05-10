<div class="featured-heading center-block" style="text-align: center; font-size: large;">
    Подходящие вызовы на время карантина<br/>

    <span class="featured-seperator" style="color:lightgrey;">____________</span>
</div>

<section id="all" class="featured-products">

    <div class="product-grid-4">

        @foreach (app('Webkul\Product\Repositories\ProductRepository')->getAll(16) as $productFlat)

            @include ('shop::products.list.card', ['product' => $productFlat])

        @endforeach

    </div>

</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
