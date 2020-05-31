@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.customer.account.achievementlist.page-title') }}
@endsection

@section('content-wrapper')
    <div class="account-content">
        @include('shop::customers.account.partials.sidemenu')

        <div class="account-layout">

            <div class="account-head mb-15">
                <span class="account-heading">{{ __('shop::app.customer.account.achievementlist.title') }}</span>
                <div class="horizontal-rule"></div>
            </div>

            <div class="d-flex justify-content-between">
                @foreach (app('Webkul\Achievement\Repositories\AchievementRepository')->getSortedRewards() as $reward)

                    @include ('shop::customers.account.achievementlist.card', ['reward' => $reward])

                @endforeach
            </div>
        </div>
    </div>
@endsection