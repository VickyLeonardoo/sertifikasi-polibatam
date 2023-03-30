<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Apl1;

class AsesiController extends Controller
{
    public function index()
    {
        return view('asesi.index', [
            'title' => 'Dashboard Asesi',
        ]);
    }

    public function viewProfile()
    {
        return view('asesi.viewProfile', [
            'title' => 'Identitas Asesi',
            'profile' => User::where('id', Auth::guard('user')->user()->id)->first(),
        ]);
    }

    public function viewApl()
    {
        $id = Auth::guard('user')->user()->id;
        return view('asesi.viewApl', [
            'title' => 'Data APL',
            'apl' => Apl1::where('user_id', $id)->get(),
        ]);
    }

    public function viewPassword()
    {
        return view('asesi.viewPassword', [
            'title' => 'Ganti Password',
        ]);
    }

    public function simpanPassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|required_with:password_confirmation|same:password_confirmation|min:8',
        ], [
            'password.required' => 'Password Wajib Diisi',
            'password.same' => 'Password Baru Tidak Sama',
            'old_password' => 'Password Harus Diisi',
            'password.min' => 'Password Minimal 8 Karakter',
        ]);

        $data = $request->all();

        $user = User::find(auth()->user()->id);
        // $user = Auth::guard('pelapor')->user()->id ;
        if (!\Hash::check($data['old_password'], $user->password)) {

            return back()->withToastError('Kamu Salah Memasukkan Password Lama');
        } else {
            User::where('id', Auth::guard('user')->user()->id)->update([
                'password' => bcrypt(Request()->password)
            ]);

            return redirect()->back()->withToastSuccess('Password Berhasil Diganti.');
        }
    }
}
