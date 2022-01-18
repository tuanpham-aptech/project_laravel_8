<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
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
        // dd(Auth::user()->getStrType());
        // dd($allowRoles);
        if(in_array(Auth::user()->getStrType(),$allowRoles)){
            return $next($request);
        }
        return redirect()->route('403');
    }
}
