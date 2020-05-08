@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.customer.account.donelist.page-title') }}
@endsection

@section('content-wrapper')
    <div class="account-content">
        @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

        @include('shop::customers.account.partials.sidemenu')

        @inject ('reviewHelper', 'Webkul\Product\Helpers\Review')

        <div class="account-layout">

            <div class="account-head mb-15">
                <span class="account-heading">{{ __('shop::app.customer.account.donelist.title') }}</span>

                @if (count($items))
                    <div class="account-action">
                        <a href="{{ route('customer.donelist.removeall') }}">{{ __('shop::app.customer.account.donelist.deleteall') }}</a>
                    </div>
                @endif

                <div class="horizontal-rule"></div>
            </div>

            {!! view_render_event('bagisto.shop.customers.account.donelist.list.before', ['donelist' => $items]) !!}

            <div class="account-items-list">

                @if ($items->count())
                    @foreach ($items as $item)
                        <div class="account-item-card mt-15 mb-15">
                            <div class="media-info">
                                @php
                                    $image = $item->product->getTypeInstance()->getBaseImage($item);
                                @endphp

                                <img class="media" src="{{ $image['small_image_url'] }}" />

                                <div class="info">
                                    <div class="product-name">
                                        {{ $item->product->name }}

                                        @if (isset($item->additional['attributes']))
                                            <div class="item-options">

                                                @foreach ($item->additional['attributes'] as $attribute)
                                                    <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                                @endforeach

                                            </div>
                                        @endif
                                    </div>

                                    <span class="stars" style="display: inline">
                                        @for ($i = 1; $i <= $reviewHelper->getAverageRating($item->product); $i++)
                                            <span class="icon star-icon"></span>
                                        @endfor
                                    </span>
                                </div>
                            </div>

                            <div class="operations">
                                <a class="mb-50" href="{{ route('customer.donelist.remove', $item->id) }}">
                                    <span class="icon trash-icon"></span>
                                </a>

{{--                                <a href="{{ route('customer.donelist.move', $item->id) }}" class="btn btn-black btn-md">--}}
{{--                                    {{ __('shop::app.customer.account.donelist.move-to-cart') }}--}}
{{--                                </a>--}}
                                <a href="{{ route('shop.reviews.create', Webkul\Product\Models\ProductFlat::where('product_id', $item->product_id)->first()->url_key) }}" class="btn btn-black btn-md">
                                    {{ __('shop::app.customer.account.donelist.write-review') }}
                                </a>
                            </div>
                        </div>

                        <div class="horizontal-rule mb-10 mt-10"></div>
                    @endforeach

                    <div class="bottom-toolbar">
                        {{ $items->links()  }}
                    </div>
                @else
                    <div class="empty">
                        {{ __('shop::app.customer.account.donelist.empty') }}
                    </div>
                @endif
            </div>

            {!! view_render_event('bagisto.shop.customers.account.donelist.list.after', ['donelist' => $items]) !!}

        </div>
    </div>
@endsection