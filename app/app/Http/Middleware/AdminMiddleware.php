<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class AdminMiddleware
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
        $is_admin = auth('admin')->user()->is_admin;
        if ($is_admin != 1) {
            //dd('権限なし');
            auth('admin')->logout();
            return redirect()->route('admin.login');
        }
        dd(auth('admin')->user());
        return $next($request);
    }
}
