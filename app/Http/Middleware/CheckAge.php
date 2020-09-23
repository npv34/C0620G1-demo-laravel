<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CheckAge
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
        $userLogin = Auth::user();
        $age = Carbon::parse($userLogin->birthday)->age;
        if ($age < 18) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
