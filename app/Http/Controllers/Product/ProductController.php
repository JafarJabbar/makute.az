<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\BaseController;
use App\Models\Categories;
use App\Models\Menus;
use App\Models\Products;
use Illuminate\Http\Request;

class productController extends BaseController
{
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $menu=$this->menu;
        $configs=$this->configs;
        $categories=Categories::where('status',1)->get();
        $products=Products::select('products.*','categories.title as title')->where('products.status','1')->join('categories','products.category_id','categories.id')->get();
        return view('pages.products.products',compact(['menu','configs','categories','products']));
    }

    public function category(Request $request)
    {
        $menu=$this->menu;
        $configs=$this->configs;
        $categories=Categories::where('status',1)->get();
        $products=Products::select('products.*','categories.title as title')->where('products.category_id',$request->category)->join('categories','products.category_id','categories.id')->get();
        return view('pages.products.products',compact(['menu','configs','categories','products']));
    }

    public function show(Request $request)
    {
        $menu=$this->menu;
        $configs=$this->configs;
        $product=Products::select('products.*','categories.title as title')->where('products.url',$request->url)->join('categories','products.category_id','categories.id')->first();
        $products=Products::select('products.*','categories.title as title')->where([['products.status',1],['products.url','!=',$request->url]])->join('categories','products.category_id','categories.id')->inRandomOrder()->limit(3)->get();
        return view('pages.products.product',compact(['menu','configs','product','products']));
    }


}
