<?php

namespace Webkul\CMS\Http\Controllers\Shop;

use Webkul\CMS\Http\Controllers\Controller;
use Webkul\CMS\Repositories\CmsRepository;

class PagePresenterController extends Controller
{
    /**
     * CmsRepository object
     *
     * @var \Webkul\CMS\Repositories\CmsRepository
     */
    protected $cmsRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\CMS\Repositories\CmsRepository  $cmsRepository
     * @return void
     */
    public function __construct(CmsRepository $cmsRepository)
    {
        $this->cmsRepository = $cmsRepository;
    }

    /**
     * To extract the page content and load it in the respective view file
     *
     * @param  string  $urlKey
     * @return \Illuminate\View\View
     */
    public function presenter($urlKey)
    {
        $page = $this->cmsRepository->findByUrlKeyOrFail($urlKey);

        return view('shop::cms.page')->with('page', $page);
    }

    public function categoryPresenter($id)
    {
        $category = app('Webkul\Category\Repositories\CategoryRepository')->getCategoryTree()->find($id);
        return view('shop::home.categories.category', [
            'id' => $category->id,
            'page_title' => $category->name,
            'meta_title' => $category->name,
            'categoryName' => $category->name
        ]);
    }

}