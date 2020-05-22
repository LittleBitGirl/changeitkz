@extends('shop::layouts.master')

@section('page_title')
    {{ $page_title }}
@endsection

@section('seo')
    <meta name="title" content="{{ $meta_title }}" />

{{--    <meta name="description" content="{{ $meta_description }}" />--}}

{{--    <meta name="keywords" content="{{ $meta_keywords }}" />--}}
@endsection

@section('content-wrapper')

    <div class="featured-heading center-block" style="text-align: center; font-size: large;">
        {{__("shop::app.cms-pages.prefix").' - '.$categoryName}}<br/>
        <span class="featured-seperator" style="color:lightgrey;">____________</span>
    </div>

    <section id="all" class="featured-products">

        <div class="product-grid-4">

            @foreach (app('Webkul\Product\Repositories\ProductRepository')->getAll($id) as $productFlat)

                @include ('shop::products.list.card', ['product' => $productFlat])

            @endforeach

        </div>

    </section>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
@endsection
