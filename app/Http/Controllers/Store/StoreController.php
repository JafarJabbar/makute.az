<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Shared\BaseController;
use App\Models\Stores;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $menu=$this->menu;
        $configs=$this->configs;
        $stores=Stores::where('status',1)->get();
        return view('pages.stores.stores',compact(['menu','configs','stores']));
    }
}
