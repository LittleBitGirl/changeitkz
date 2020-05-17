<?php


namespace Webkul\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Webkul\Product\Repositories\ProductOfferRepository;

class OfferController {
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * ProductReviewRepository object
     *
     * @var \Webkul\Product\Repositories\ProductOfferRepository
     */
    protected $productOfferRepository;

    /**
     * Create a new controller instance.
     *
     * @param \Webkul\Product\Repositories\ProductOfferRepository $productReview
     * @return void
     */
    public function __construct(ProductOfferRepository $productOfferRepository)
    {
        $this->productOfferRepository = $productOfferRepository;

        $this->_config = request('_config');
    }

    public function create(Request $request)
    {
        Event::dispatch('customer.offer.create.before');
        if (request()->hasFile('offerImage')) {
            $image = request()->file('offerImage');
            $image->store('offer');
        }
        $this->productOfferRepository->create([
            'name' => request()->name,
            'description' => request()->description,
            'author_id' => auth()->guard('customer')->user()->id,
            'image_path' => 'offer/' . request()->image
        ]);

        Event::dispatch('customer.offer.create.after');
        session()->flash('success', trans('shop::app.response.create-success', ['name' => 'Offer']));

        return redirect()->route('customer.offer.index');
    }

    public function delete($id)
    {
        Event::dispatch('customer.offer.delete.before');
        $this->productOfferRepository->delete($id);
        Event::dispatch('customer.offer.delete.after');
        session()->flash('success', trans('shop::app.response.delete-success', ['name' => 'Offer']));
        return redirect()->route('customer.offer.index');


    }

}