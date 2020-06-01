<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\BaseController;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $menu=$this->menu;
        $configs=$this->configs;
        return view('pages.static.contact',compact(['menu','configs']));
    }
}
