<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skema;
use App\Models\Prodi;
use App\Models\User;
use App\Models\Apl1;
use App\Models\Formulir;
use App\Models\Unit;
use App\Models\Apl2;
class AsesorController extends Controller
{
    public function index(){
        return view('asesor.index',[
            'title' => 'Dashboard Asesor',
            'subtitle' => 'Dashboard Asesor',
            'jmlAsesi' => User::count(),
            'jmlSkema' => Skema::count(),
            'jmlVer' => Apl1::where('status','0')->count(),
            'jmlTerdaftar' => Apl1::where('status','1')->count(),
        ]);
    }

    public function viewSkema(){
        return view('asesor.viewSkema',[
            'title' => 'Skema Sertifikasi',
            'skema' => Skema::all(),
            'prodi' => Prodi::all(),
            'subtitle' => 'Daftar Skema Sertifikasi',
        ]);
    }

    public function viewAsesi(){
        return view('asesor.viewDataAsesi',[
            'title' => 'Data Asesi',
            'asesi' => User::all(),
            'subtitle' => 'Daftar Data Asesi'
        ]);
    }

    public function viewProfile($slug){
        $profile = User::where('slug',$slug)->first();
        return view('asesor.viewProfileAsesi',[
            'title' => 'Profile Asesi',
            'subtitle' => 'Menampilkan Profile Asesi '.$profile->nama,
            'profile' => $profile,
        ]);
    }

    public function viewPendaftar(){
        return view('asesor.viewPendaftar',[
            'title' => 'Dashboard Data Pendaftar',
            'subtitle' => 'Data Pendaftar',
            'apl' => Formulir::where('status', 'Menunggu')->get(),
        ]);
    }

    public function verifikasiPendaftar(){
        $id = Request()->idPendaftar;
        $tolak = [
            'status' => 2
        ];

        $acc = [
            'status' => 1
        ];

        if (Request()->verif == 'acc') {
            Apl1::where('id',$id)->update($acc);
        }else{
            Apl1::where('id',$id)->update($tolak);
        }
        return redirect()->back()->withToastSuccess('Berhasil Mendaftarkan.');
    }

    public function viewAplPendaftar($slug){
        $user = User::where('slug', $slug)->first();
        $idUser = $user->id;
        $form = Formulir::where('user_id', $idUser)->first();
        $idForm = $form->id;
        return view('asesor.viewApl',[
            'title' => 'APL 02',
            'subtitle' => 'APL 02',
            'unit' => Unit::all(),
            'apl' => Apl2::where('formulir_id', $idForm)->get(),
            'idForm' => $idForm,

        ]);

    }

    public function lulusApl($id){
        $data = [
            'status' => 'Lulus'
        ];

        Formulir::where('id',$id)->update($data);
        return redirect()->back()->withToastSuccess('Berhasil Diverifikasi');

    }

    public function tolakApl($id){
        $data = [
            'status' => 'Tidak Lulus'
        ];

        Formulir::where('id',$id)->update($data);
        return redirect()->back()->withToastSuccess('Berhasil Diverifikasi');

    }
}
