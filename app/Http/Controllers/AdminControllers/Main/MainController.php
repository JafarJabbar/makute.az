<?php

namespace App\Http\Controllers\AdminControllers\Main;

use App\Http\Controllers\Shared\BaseController;
use App\Models\Categories;
use App\Models\Products;
use Cookie;

class MainController extends BaseController
{
    public function __construct(){
        parent::__construct();
    }


    public function index(){
        $menu=$this->menu;
        $configs=$this->configs;
        $products=Products::select('products.*','categories.title','categories.id AS category')->where('products.deleted_at',null)->join('categories','categories.id','products.category_id')->get();
        $categories=Categories::where('status','1')->get();
        return view('admin.index',compact(['products','categories']));
    }
}
