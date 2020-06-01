<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Shared\BaseController;
use App\Models\Sliders;
use Illuminate\Http\Request;

class MainController extends BaseController
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $menu=$this->menu;
        $configs=$this->configs;
        $sliders=Sliders::whereStatus(1)->get();
        return view('index',compact(['menu','configs','sliders']));
    }
}
