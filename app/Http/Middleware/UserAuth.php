<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuth
{
    public function handle(Request $request, Closure $next, $userType)
    {
        if (auth()->user()->user_type == $userType) {
            return $next($request);
        }
        // return response()->json(['no access']);
        abort(401);
    }
}
