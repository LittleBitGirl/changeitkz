<?php


namespace Webkul\Customer\Models;


use Illuminate\Database\Eloquent\Model;
use Webkul\Core\Eloquent\TranslatableModel;

class Achievement extends TranslatableModel {

    protected $table = 'achievements';

    protected $fillable = ['name', 'num_of_points', 'path'];



}