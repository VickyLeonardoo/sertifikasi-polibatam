<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        if ($user->role_id == $role) {
            return $next($request);
        }

        return redirect('login')->withToastError('Login Gagal, Kamu tidak punya akses');
    }

}
