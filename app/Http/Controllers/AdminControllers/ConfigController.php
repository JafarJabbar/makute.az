<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Configs;
use Illuminate\Http\Request;
use Validator;
class ConfigController extends Controller
{
    public  function index(){
        $configs=Configs::find(1);
        return view('admin.Pages.Configs.configs',compact('configs'));
    }
    public function edit(Request $request){
        $validator=Validator::make($request->post(),
            [
                'title'=>'required | string',
                'keywords'=>'required | string',
                'description'=>'required | string',
                'work_hour'=>'required | string',
                'address'=>'required | string',
                'phone_1'=>'required | string',
                'phone_2'=>'required | string',
                'email'=>'required | string',
                'facebook'=>'required | string',
                'instagram'=>'required | string',
                'twitter'=>'required | string',
                'linkedin'=>'required | string',
                'maps'=>'required | string',
            ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $configs=Configs::find(1);
        $configs->title=$request->post('title');
        $configs->keywords=$request->post('keywords');
        $configs->description=$request->post('description');
        $configs->work_hour=$request->post('work_hour');
        $configs->phone_1=$request->post('phone_1');
        $configs->phone_2=$request->post('phone_2');
        $configs->mail=$request->post('email');
        $configs->facebook=$request->post('facebook');
        $configs->instagram=$request->post('instagram');
        $configs->twitter=$request->post('twitter');
        $configs->linkedin=$request->post('linkedin');
        $configs->google_maps=$request->post('maps');
        if ($configs->save()){
            return redirect()->route('admin.config.index');
        }
    }
}
