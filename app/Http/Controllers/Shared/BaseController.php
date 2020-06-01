<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use App\Models\Menus;
use App\Models\Configs;
use App\Models\Users;
use View;
use Illuminate\Http\Request;
class BaseController extends Controller
{
    protected $menu;
    protected $configs;
    public function __construct(){
        $this->menu = Menus::where('status',1)->get();
        $this->configs = Configs::where('id',1)->first();
        View::share ( 'menu', $this->menu );
        View::share ( 'configs', $this->configs);
    }
}
