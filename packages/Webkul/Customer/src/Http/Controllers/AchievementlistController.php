<?php


namespace Webkul\Customer\Http\Controllers;


use Webkul\Customer\Models\Achievementlist;

class AchievementlistController extends Controller {


    protected $_config;

    public function __construct()
    {
        $this->middleware('customer');

        $this->_config = request('_config');

    }

    public function store($user_id, $achievement_id)
    {
        $achievementlist = new Achievementlist;
        $achievementlist->customer_id = $user_id;
        $achievementlist->achievement_id = $achievement_id;
        return $achievementlist->save();
    }

    public function index()
    {
        return view($this->_config['view']);
    }

}