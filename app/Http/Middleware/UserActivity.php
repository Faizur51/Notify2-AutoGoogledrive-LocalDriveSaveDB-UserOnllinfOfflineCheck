<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
class UserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

       if(Auth::check()){
           $expaired=Carbon::now()->addMinutes(1);
           Cache::put('user-is-online'.auth()->user()->id,true,$expaired);
       }

        return $next($request);
    }
}
