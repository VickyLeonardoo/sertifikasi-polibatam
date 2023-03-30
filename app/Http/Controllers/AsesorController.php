<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skema;
use App\Models\Prodi;
use App\Models\User;
use App\Models\Apl1;

class AsesorController extends Controller
{
    public function index(){
        return view('asesor.index',[
            'title' => 'Dashboard Asesor',
            'subtitle' => 'Dashboard Asesor',
            'jmlAsesi' => User::count(),
            'jmlSkema' => Skema::count(),
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
            'apl' => Apl1::get(),
        ]);
    }
}
