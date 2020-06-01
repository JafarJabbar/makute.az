<?php

namespace App\Http\Controllers\AdminControllers\Auth;

use App\Http\Controllers\Shared\BaseController;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cookie;
class AuthController extends BaseController
{
    public function checkToken(){
        $user=Users::where('token',Cookie::get('token'))->first();
    }
    public function login(){
        if (!$this->checkToken()){
            return view('admin.login');
        }else{
            return redirect()->route('admin.dashboard');
        }
    }
    public function start(Request $request){
        $user=Users::where([['email',$request->post('email')],['password',md5($request->post('password'))]])->first();
        if($user){
            $token=csrf_token();
            $user->token=$token;
            if ($user->save()){
                Cookie::queue(Cookie::make('token',$token,(time()+86400*365)));
                Cookie::queue(Cookie::make('username',$user->username,(time()+86400*365)));
                Cookie::queue(Cookie::make('id',$user->id),(time()+86400*365));
                return redirect()->route('admin.dashboard');
            }
        }else{
            return redirect()->route('auth.login');
        }
    }



    public function logout(){
        Cookie::queue(Cookie::forget('token'));
        Cookie::queue(Cookie::forget('username'));
        Cookie::queue(Cookie::forget('id'));
        return redirect()->route('auth.login');
    }
}
