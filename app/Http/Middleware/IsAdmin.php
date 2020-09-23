<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        $role = 'user';
        if ($role !== 'admin') {
            abort(403,'Ban khong co quyen');
        }
        return $next($request);
    }
}
