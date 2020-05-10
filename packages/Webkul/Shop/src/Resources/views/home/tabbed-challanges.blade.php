<div class="tabs is-centered">
    <ul id="challenge-list">
        @if (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts()->count())
            <li id="tab-featured" class="is-active tab" onClick="selectFeatured(event)">
                <a>Рекомендованные</a>
            </li>
        @endif
        @if (app('Webkul\Product\Repositories\ProductRepository')->getNewProducts()->count())
            <li id="tab-new" class="tab" onClick="selectNew()">
                <a>Новые</a>
            </li>
        @endif
    </ul>
</div>

<div class="tabs-content">
    <section id="featured" class="featured-products">
        <div class="featured-grid product-grid-4">

            @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)

                @include ('shop::products.list.card', ['product' => $productFlat])

            @endforeach

        </div>
    </section>
    <section id="new" class="featured-products">

        <div class="product-grid-4">

            @foreach (app('Webkul\Product\Repositories\ProductRepository')->getNewProducts() as $productFlat)

                @include ('shop::products.list.card', ['product' => $productFlat])

            @endforeach

        </div>

    </section>
</div>
<script type="text/javascript">
    $(document).ready(function () {
       $('#new').hide();
    });
    function selectFeatured() {
        $('#new').hide();
        $('#featured').show();
        $('#tab-new').removeClass('is-active');
        $('#tab-featured').addClass('is-active');
    }
    function selectNew() {
        $('#featured').hide();
        $('#tab-featured').removeClass('is-active');
        $('#new').show();
        $('#tab-new').addClass('is-active');
    }
</script>
