<?php

namespace App\Http\Middleware;

use App\Models\Users;
use Closure;
use Cache;
use Cookie;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user=Users::where('token',Cookie::get('token'))->first();
        if (!$user){
            return redirect()->route('auth.login');
        }
        return $next($request);
    }
}
