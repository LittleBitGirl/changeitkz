@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.customer.account.offer.page-title') }}
@endsection

@section('content-wrapper')

    <div class="account-content">
        @include('shop::customers.account.partials.sidemenu')

        <div class="account-layout">

            <div class="account-head mb-10">
                <span class="back-icon"><a href="{{ route('customer.account.index') }}"><i class="icon icon-menu-back"></i></a></span>
                <span class="account-heading">{{ __('shop::app.customer.account.offer.title') }}</span>
                <div class="horizontal-rule"></div>
            </div>

            {!! view_render_event('bagisto.shop.customers.account.downloadable_products.list.before') !!}

            <div class="account-items-list">
                <div class="account-table-content">

                    {!! app('Webkul\Shop\DataGrids\DownloadableProductDataGrid')->render() !!}
                    
                </div>

            {!! view_render_event('bagisto.shop.customers.account.downloadable_products.list.after') !!}
            <button type="button" data-toggle="modal" data-target="#createOfferModal" class="btn btn-lg btn-black mt-10">
                {{ __('shop::app.customer.account.offer.create') }}
            </button>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="createOfferModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('shop::app.customer.account.offer.create') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">{{ __('shop::app.customer.account.offer.name') }}</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ __('shop::app.customer.account.offer.name-placeholder') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">{{ __('shop::app.customer.account.offer.category') }}</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{ __('shop::app.customer.account.offer.description') }}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">{{ __('shop::app.customer.account.offer.image') }}</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection