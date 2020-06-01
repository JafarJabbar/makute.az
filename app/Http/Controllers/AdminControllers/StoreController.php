<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\BaseController;
use App\Models\Stores;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Str;
use Validator;
class StoreController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add(Request $request)
    {
        $validator=Validator::make($request->post(),
            [
                'name'=>'required | string',
                'work_hour' =>'required | string',
                'phone_1' =>'required | string',
                'phone_2' =>'string',
                'address' =>'required|string',
                'images'=>'mimes:jpg,jpeg,png,bmp,jfif | max:2048',
                'description'=>'required | string'
            ]);
        $names=(['work_hour'=>'İş saatları','address'=>'Mağazanın ünvanı','phone_1'=>'Mağazanın ən azı bir nömrəsi','phone_2'=>'Mağazanın ən azı bir nömrəsi','images[0]'=>"Şəkilin ən azı birini yükləmək","name"=>"Mağaza adını yazmaq","images"=>"Mağazanın şəkilləri","description"=>"Mağaza haqqında yazmaq"]);
        $validator->setAttributeNames($names);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $images=[];
        $stores = new Stores();

        $stores->name = $request->post('name');
        $stores->description = $request->post('description');
        $stores->work_hour = $request->post('work_hour');
        $stores->phone_1 = $request->post('phone_1');
        $stores->phone_2 = $request->post('phone_2');
        $stores->address = $request->post('address');
        if ($request->file('images')):
            foreach ($request->file('images') as $key => $image) {
                $images[$key]=$image;
            }
            $slug=Str::slug($request->post('name'));
            $path = (realpath('img').'/Stores/'.$slug);
            if (!is_dir($path)){
                mkdir($path);
            }
            $names=[];
            foreach ($images as $key => $image) {
                $names[$key]=$slug.$key.rand(0,99999).'.'.$image->getClientOriginalExtension();
                $stores['image_' . ($key + 1)] = '/img/Stores/'. $slug.'/' .$names[$key] ;
                $image->move($path,$names[$key]);
            }
        endif;
        $stores->save();
        return redirect()->route('admin.store.index');
    }

    public function index(){
        $stores=Stores::where('deleted_at',null)->get();
        return view('admin.Pages.Strores.stores',compact('stores'));
    }
    public function show(Request $request){
        $store=Stores::where('status',$request->store)->first();
        return view('admin.Pages.Strores.store_edit',compact('store'));
    }
    public function action(Request $request){
        $store=Stores::where('id',$request->id)->first();
        switch ($request->type) {
            case 'hide':
                $store->status=!$store->status;
                break;
            case 'delete':
                $store->deleted_at=Carbon::now();
        }
        if ($store->save()){
            return redirect()->route('admin.store.index');
        }
    }


}
