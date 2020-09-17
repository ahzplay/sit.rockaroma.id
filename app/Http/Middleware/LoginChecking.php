<?php

namespace App\Http\Middleware;

use Closure;

class LoginChecking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $req
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($req, Closure $next)
    {
        if($req->session()->get('isLogin')){
            return $next($req);
        } else {
            return redirect()->to('enter-page');
        }

    }
}
