<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$roles)
    {
        $allowRoles = (explode('|',$roles));
        // sau đó sử dụng hàm in_array(biến cần kiểm tra, mảng )
        // trong đó Auth::user()->getStrType() là status trong bảng user
        if(in_array(Auth::user()->getStrType(),$allowRoles)){
            return $next($request);
        }
        return redirect()->route('403');
    }
}
