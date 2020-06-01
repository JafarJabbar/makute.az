<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Shared\BaseController;
use App\Models\Categories;
use App\Models\Products;
use Carbon\Carbon;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class ProductController extends BaseController
{

    public function add(Request $request)
    {
        $validator=Validator::make($request->post(),
            [
               'name'=>'required | string',
               'category' =>'required | int',
                'images'=>'mimes:jpg,jpeg,png,bmp,jfif | max:2048',
                'description'=>'required | string'
            ]);
        $names=(['category'=>'Kateqoriya','images[0]'=>"Şəkilin birini yükləmək","name"=>"Məhsul adını yazmaq","images"=>"Məhsulun şəkilləri","description"=>"Məhsul haqqında yazmaq"]);
        $validator->setAttributeNames($names);
        if ($validator->fails()){
                return redirect()->back()->withErrors($validator);
            }
        $images=[];
        $url = Str::slug($request->post('name'));
        $products = $request->post('url') ? Products::where('url',$request->post('url'))->first() : new Products();

        $products->name = $request->post('name');
        $products->url = $url;
        $products->description = $request->post('description');
        $products->category_id = $request->post('category');
        if ($request->file('images')):
            foreach ($request->file('images') as $key => $image) {
                $images[$key]=$image;
            }
            $path = (realpath('img').'/products/'.Categories::find($request->post('category'))->url);
            if (!is_dir($path)){
                mkdir($path);
            }
            $names=[];
            foreach ($images as $key => $image) {
                $names[$key]=$url.$key.rand(0,99999).'.'.$image->getClientOriginalExtension();
                $products['image_' . ($key + 1)] = '/img/Products/'. Categories::find($request->post('category'))->url.'/' .$names[$key] ;
                $image->move($path,$names[$key]);
            }
        endif;
        $products->save();
        return redirect()->route('admin.dashboard');
        }



    public function show(Request $request){
        $categories=Categories::whereStatus('1')->get();
        $product=Products::select('products.*','categories.title','categories.id AS category_id')->where('products.url',$request->product)->join('categories','categories.id','products.category_id')->first();
        return view('admin.Pages.product_edit',compact(['categories','product']));
    }


    public function action(Request $request){
        $product=Products::find($request->post('id'));
        switch ($request->post('type')) {
            case 'hide':
                $product->status=!$product->status;
                break;
            case 'delete':
                $product->deleted_at=Carbon::now();
        }
        if ($product->save()){
            return redirect()->route('admin.dashboard');
        }

    }
}
