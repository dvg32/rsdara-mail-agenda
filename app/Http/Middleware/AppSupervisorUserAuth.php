<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class AppSupervisorUserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::user()->role != 3||Auth::user()->role != 2) {
        //     # code...
        //     Alert::Error('Anda Tidak Memiliki Hak kses');
        //     return back();
        // }
        // return $next($request);
        if (Auth::user()->role == 3||Auth::user()->role == 2) {
            # code...
            return $next($request);
        }else{
            Alert::Error('Anda Tidak Memiliki Hak Akses');
            return back();
        }
    }
}
