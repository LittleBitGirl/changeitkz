@extends('shop::layouts.master')
@section('page_title')
    {{ __('shop::app.customer.account.offer.page-title') }}
@endsection
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
                    {!! app('Webkul\Shop\DataGrids\OffersDataGrid')->render() !!}
                </div>
                <button type="button" id="createOfferBtn" data-toggle="modal" data-target="#modal-offer" class="btn btn-md btn-black mt-10">
                    {{ __('shop::app.customer.account.offer.create') }}
                </button>
            </div>
        </div>
    </div>
@endsection

<div class="modal fade" id="modal-offer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-background"></div>
    <div class="modal-dialog">
        <div class="modal-content">
            <header class="modal-header">
                <p class="modal-card-title">{{ __('shop::app.customer.account.offer.create') }}</p>
                <button class="delete close" data-dismiss="modal" aria-label="close"></button>
            </header>
            <form enctype="multipart/form-data" action="{{route('customer.offer.create')}}" method="post">
                @csrf
                <div class="modal-body" >
                    <div class="form-group">
                        <label for="exampleFormControlInput1">{{ __('shop::app.customer.account.offer.name') }}</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="{{ __('shop::app.customer.account.offer.name-placeholder') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">{{ __('shop::app.customer.account.offer.category') }}</label>
                        <select class="form-control" name="category" id="categoriesSelect">
                            @foreach(\Webkul\Category\Models\Category::onlyRu()->get() as $category)
                                @if(isset($category))
                                    {!! $translation = $category['translations'][0]!!}
                                    <option value="{{$category->id}}">
                                        {{ $translation['name'] }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{ __('shop::app.customer.account.offer.description') }}</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">{{ __('shop::app.customer.account.offer.image') }}</label>
                        <input type="file" name="offerImage" class="form-control-file" id="offerImage" accept="image/*">
                    </div>
                </div>

                <footer class="modal-card-foot d-flex justify-content-between">
                    <button class="btn btn-black" type="submit">{{ __('shop::app.customer.account.offer.send') }}</button>
                    <button data-dismiss="modal" class="btn btn-black">{{ __('shop::app.customer.account.offer.cancel') }}</button>
                </footer>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript">
    function openModal() {
        $('#modal-offer').modal('show');
    }
    function closeModal() {
        $('#modal-offer').modal('hide');

    }

</script>