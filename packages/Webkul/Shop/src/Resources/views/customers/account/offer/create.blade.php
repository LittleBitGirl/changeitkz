@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.customer.account.offer.page-title') }}
@endsection

@section('content-wrapper')
    <div class="account-content">
        @include('shop::customers.account.partials.sidemenu')

        <div class="account-layout">
            <div class="account-head">
                <span class="account-heading">{{ __('shop::app.customer.account.offer.title') }}</span>
                <div class="horizontal-rule"></div>
            </div>

            <div class="account-items-list">
                <div class="account-item-card mt-15 mb-15">
                    <div class="media-info">
                    </div>
                </div>
                <div class="horizontal-rule mb-10 mt-10"></div>
            </div>
        </div>
    </div>
@endsection

<script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
{{--<div class="empty">--}}
{{--    {{ __('shop::app.customer.account.offer.empty') }}--}}
{{--</div>--}}
