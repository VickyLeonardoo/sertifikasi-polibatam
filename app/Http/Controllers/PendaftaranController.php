<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Models\Skema;
use Http;
use App\Models\User;
Use App\Models\Pekerjaan;
use App\Models\Apl1;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Mail;

class PendaftaranController extends Controller
{
    public function viewPendaftaran(){
        return view('pendaftaran',[
            'skema' => Skema::all(),
            'title' => 'Pendaftaran Sertifikasi'
        ]);
    }

    public function simpanPendaftaran(Request $request){
        //Fetch API POLIBATAM MEMAKAI NIM
        $nim = Request()->nim;
        $res = Http::get("http://sid.polibatam.ac.id/apilogin/web/api/auth/cek-id?id={$nim}");
        $getData = json_decode(json_encode($res['data']));
        $str = strtolower($nim.'-'.$getData->name);
        $email = $getData->email;
        $skema = Skema::where('id',Request()->skema)->first();
        $skemaNama = $skema->nama;
        $user = User::create([
            'nama' => $getData->name,
            'nim' => $getData->nim_nik_unit,
            'tempatLahir' => $getData->tmplhr,
            'tglLahir' =>  date('y-m-d', strtotime($getData->tgllhr)),
            'alamat' => $getData->alamat,
            'angkatan' => $getData->angkatan,
            'telp' => $getData->notelp,
            'kelas' => $getData->kelas,
            'prodi' => $getData->prodi,
            'email' =>  $getData->email,
            'password' => bcrypt('123456'),
            'role_id' => 2,
            'slug' => preg_replace('/\s+/', '-', $str),
        ]);

        $pekerjaan = Pekerjaan::create([
            'user_id' => $user->id,
            'namaPerusahaan' => Request()->namaPerusahaan,
            'jabatan'=> Request()->jabatan,
            'alamatPerusahaan' => Request()->alamatPerusahaan,
            'telp' => Request()->telp,
            'email' => Request()->email,

        ]);

        $apl1 = Apl1::create([
            'user_id' => $user->id,
            'tujuanAsesmen' => Request()->tujuanAsesmen,
            'skema_id' => Request()->skema,
        ]);

        $isiEmail = [
            'nama' => $getData->name,
            'nim' => $getData->nim_nik_unit,
            'skema' => $skemaNama,
        ];

        Mail::to($email)->send(new SendMail($isiEmail));

        $kredensil = array(
            'nim' => $user->nim,
            'password' => 123456,
        );

        if (Auth::guard('user')->attempt($kredensil)) {
            $user = Auth::guard('user')->user();
                return redirect()->intended('dashboard-asesi')->withToastSuccess('Pendaftaran Berhasil, Lengkapi APL02');

        }elseif (Auth::guard('asesor')->attempt($kredensil)) {
            $user = Auth::guard('asesor')->user();
                return redirect()->route('viewHome')->withToastSuccess('Login Berhasil');
        }
        return redirect('/login')->withToastError('Maaf Username atau Password anda salah');

    // return redirect()->route('indexAsesi')->withToastSuccess('Kamu Berhasil Mendaftar, Silahkan Melengkapi APL 02');

    }
}
