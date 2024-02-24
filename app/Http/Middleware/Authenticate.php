<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    //  protected function unauthenticated($request, array $guards)
    // {
    //     if ($request->expectsJson()) {
    //         return response()->json(['message' => 'Unauthorized'], 401);
    //     }

    //     return redirect()->guest(route('login')); // Keep this for non-JSON requests
    //     // return response()->json(['message' => 'Unauthorized'], 401);
    // }

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
