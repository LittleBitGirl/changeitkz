<?php

namespace Webkul\Shop\Http\Controllers;

use Illuminate\Support\Facades\Storage;
//use Webkul\Sales\Repositories\DownloadableLinkPurchasedRepository;

class RatingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        return view($this->_config['view']);
    }

}