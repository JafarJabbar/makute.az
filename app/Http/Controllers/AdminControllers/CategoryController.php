<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Shared\BaseController;
use App\Models\Categories;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
class CategoryController extends BaseController
{
    public function index(){
        $categories=Categories::where('deleted_at',null)->get();
        return view('admin.Pages.Category.categories',compact('categories'));
    }
    public function show(Request $request){
        $category=Categories::where('url',$request->category)->first();
        return view('admin.Pages.Category.category_edit',compact('category'));
    }
    public function add(Request $request){
        $validator=Validator::make($request->post(),
            [
                'name'=>'required | string',
            ]);
        $names=(["name"=>"Kateqoriyanın adını yazmaq"]);
        $validator->setAttributeNames($names);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $images=[];
        $url = Str::slug($request->post('name'));
        $categories = $request->post('url') ? Categories::where('url',$request->post('url'))->first() : new Categories();

        $categories->title = $request->post('name');
        $categories->url = $url;

        $categories->save();
        return redirect()->route('admin.category.index');
    }
    public function action(Request $request){
        $category=Categories::where('id',$request->id)->first();
        switch ($request->type) {
            case 'hide':
                $category->status=!$category->status;
                break;
            case 'delete':
                $category->deleted_at=Carbon::now();
        }
        if ($category->save()){
            return redirect()->route('admin.category.index');
        }
    }
}
