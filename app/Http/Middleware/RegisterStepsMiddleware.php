<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterStepsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, int $step)
    {
        $sessionStep = Session::get('step', 1);
        if($sessionStep >= $step || $step == 1) {
            return $next($request);
        } else {
            return redirect()->route('register.step.' . max($sessionStep - 1, 1));
        }
    }
}
