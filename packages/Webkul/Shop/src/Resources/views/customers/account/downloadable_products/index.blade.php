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
            <div class="account-items-list">
                <div class="account-table-content">

                    {!! app('Webkul\Shop\DataGrids\DownloadableProductDataGrid')->render() !!}
                    
                </div>
                <button type="button" onclick="openModal()" id="createOfferBtn" class="btn btn-lg btn-black mt-10">
                    {{ __('shop::app.customer.account.offer.create') }}
                </button>
            </div>
        </div>
    </div>
    <div class="modal" id="modal-offer">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">{{ __('shop::app.customer.account.offer.create') }}</p>
                <button class="delete" aria-label="close" onclick="closeModal()"></button>
            </header>

            <section class="modal-card-body">
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
            </section>

            <footer class="modal-card-foot">
                <button class="button is-success">Save changes</button>
                <button class="button">Cancel</button>
            </footer>
        </div>
    </div>
@endsection

<script type="text/javascript">
    function openModal() {
        document.getElementById('modal-offer').setAttribute('class', 'active');
    }
    function closeModal() {
        document.getElementById('modal-offer').removeAttributeNS('class', 'active')

    }


</script>