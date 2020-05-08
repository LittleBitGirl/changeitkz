<?php

namespace Webkul\Customer\Http\Controllers;

use Webkul\Product\Repositories\ProductRepository;
use Webkul\Customer\Repositories\DonelistRepository;
use Cart;

class DonelistController extends Controller
{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * ProductRepository object
     *
     * @var \Webkul\Customer\Repositories\DonelistRepository
    */
    protected $donelistRepository;

    /**
     * donelistRepository object
     *
     * @var \Webkul\Product\Repositories\ProductRepository
    */
    protected $productRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Customer\Repositories\DonelistRepository  $donelistRepository
     * @param  \Webkul\Product\Repositories\ProductRepository  $productRepository
     * @return void
     */
    public function __construct(
        DonelistRepository $donelistRepository,
        ProductRepository $productRepository
    )
    {
        $this->middleware('customer');

        $this->_config = request('_config');

        $this->donelistRepository = $donelistRepository;

        $this->productRepository = $productRepository;
    }

    /**
     * Displays the listing resources if the customer having items in donelist.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $donelistItems = $this->donelistRepository->getCustomerDonelist();

        return view($this->_config['view'])->with('items', $donelistItems);
    }

    /**
     * Function to add item to the donelist.
     *
     * @param  int  $itemId
     * @return \Illuminate\Http\Response
     */
    public function add($itemId)
    {
        $product = $this->productRepository->findOneByField('id', $itemId);

        if (! $product->status)
            return redirect()->back();

        $data = [
            'channel_id'  => core()->getCurrentChannel()->id,
            'product_id'  => $itemId,
            'customer_id' => auth()->guard('customer')->user()->id,
        ];

        $checked = $this->donelistRepository->findWhere([
            'channel_id'  => core()->getCurrentChannel()->id,
            'product_id'  => $itemId,
            'customer_id' => auth()->guard('customer')->user()->id,
        ]);

        //accidental case if some one adds id of the product in the anchor tag amd gives id of a variant.
        if ($product->parent_id != null) {
            $product = $this->productRepository->findOneByField('id', $product->parent_id);
            $data['product_id'] = $product->id;
        }

        if ($checked->isEmpty()) {
            if ($this->donelistRepository->create($data)) {
                session()->flash('success', trans('customer::app.donelist.success'));

                return redirect()->back();
            } else {
                session()->flash('error', trans('customer::app.donelist.failure'));

                return redirect()->back();
            }
        } else {
            $this->donelistRepository->findOneWhere([
                'product_id' => $data['product_id']
            ])->delete();

            session()->flash('success', trans('customer::app.donelist.removed'));

            return redirect()->back();
        }
    }

    /**
     * Function to remove item to the donelist.
     *
     * @param  int  $itemId
     * @return \Illuminate\Http\Response
     */
    public function remove($itemId)
    {
        $customerdonelistItems = auth()->guard('customer')->user()->donelist_items;

        foreach ($customerdonelistItems as $customerdonelistItem) {
            if ($itemId == $customerdonelistItem->id) {
                $this->donelistRepository->delete($itemId);

                session()->flash('success', trans('customer::app.donelist.removed'));

                return redirect()->back();
            }
        }

        session()->flash('error', trans('customer::app.donelist.remove-fail'));

        return redirect()->back();
    }

    /**
     * Function to move item from donelist to cart.
     *
     * @param  int  $itemId
     * @return \Illuminate\Http\Response
     */
    public function move($itemId)
    {
        $donelistItem = $this->donelistRepository->findOneWhere([
                'id'          => $itemId,
                'customer_id' => auth()->guard('customer')->user()->id,
            ]);

        if (! $donelistItem) {
            abort(404);
        }

        try {
            $result = Cart::moveToCart($donelistItem);

            if ($result) {
                session()->flash('success', trans('shop::app.customer.account.donelist.moved'));
            } else {
                session()->flash('info', trans('shop::app.checkout.cart.integrity.missing_options'));

                return redirect()->route('shop.productOrCategory.index', $donelistItem->product->url_key);
            }

            return redirect()->back();
        } catch (\Exception $e) {
            report($e);

            session()->flash('warning', $e->getMessage());

            return redirect()->route('shop.productOrCategory.index',  $donelistItem->product->url_key);
        }
    }

    /**
     * Function to remove all of the items items in the customer's donelist
     *
     * @return \Illuminate\Http\Response
     */
    public function removeAll()
    {
        $donelistItems = auth()->guard('customer')->user()->donelist_items;

        if ($donelistItems->count() > 0) {
            foreach ($donelistItems as $donelistItem) {
                $this->donelistRepository->delete($donelistItem->id);
            }
        }

        session()->flash('success', trans('customer::app.donelist.remove-all-success'));

        return redirect()->back();
    }
}
