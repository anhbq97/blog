<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
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
        if ($request->username == 'admin' && $request->password == '3') {
            return $next($request);
        }

        $errors = 'sai tài khoản hoặc mật khẩu';

        return redirect()->back()->withErrors($errors);
    }
}
