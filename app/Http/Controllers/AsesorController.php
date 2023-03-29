<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skema;
use App\Models\Prodi;
use App\Models\User;

class AsesorController extends Controller
{
    public function index(){
        return view('asesor.index',[
            'title' => 'Dashboard Asesor'
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
}
