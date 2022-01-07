<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckNumber
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
        //進行到下一個步驟前需要做哪些處理

        if (Auth::check()){
            if(Auth::user()->name == 'owo0726'){
                //進行到下一個步驟就是下面這行
                return $next($request);
            }
        }
        return redirect('/');
    }
}
