<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\BaseController;
use Illuminate\Http\Request;

class AboutController extends BaseController
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $menu=$this->menu;
        $configs=$this->configs;
        return view('pages.static.about',compact(['menu','configs']));
    }
}
