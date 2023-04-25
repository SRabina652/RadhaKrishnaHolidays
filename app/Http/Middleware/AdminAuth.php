<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // $path=$request->path();
        // if($path != "login" && !request()->session()->get('user')){
        //     return redirect("/login");
        // }
        // return $next($request);
        if(Auth::check()){
            if(Auth::user()->status == 1){
                return redirect('/display');
                // return $next($request);
            }else{
                return redirect('/')->with('message','Access Denied you are user not admin');
            }
        }else{
            return redirect('/login')->with('message','Access Denied you are user not admin');

        }
        return $next($request);
    
    }
    
}
