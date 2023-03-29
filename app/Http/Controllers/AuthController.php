<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function prosesLogin(Request $request){
        request()->validate (
            [
                'nim' => 'required',
                'password' => 'required',
            ]);

            $kredensil = $request->only('nim','password');

            if (Auth::guard('user')->attempt($kredensil)) {
                $user = Auth::guard('user')->user();
                    return redirect()->intended('dashboard-asesi')->withToastSuccess('Login Berhasil');

            }elseif (Auth::guard('asesor')->attempt($kredensil)) {
                $user = Auth::guard('asesor')->user();
                    return redirect()->intended('dashboard-asesor')->withToastSuccess('Login Berhasil');
            }
            return redirect('/login')->withToastError('Maaf Username atau Password anda salah');


    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
