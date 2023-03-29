<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skema;

class SkemaController extends Controller
{
    public function simpanSkema(Request $request){
        $data = [
            'nama' => Request()->nama,
            'prodi_id' => Request()->prodi,
        ];
        Skema::create($data);
        return redirect()->back()->withToastSuccess('Skema Sertifikasi Berhasil Ditambahkan..');
    }

    public function updateSkema(Request $request){
        $id = Request()->id;
        $data = [
            'nama' => Request()->nama,
            'prodi_id' => Request()->prodi,
        ];

        Skema::where('id',$id)->update($data);
        return redirect()->back()->withToastSuccess('Skema Sertifikasi Berhasil Diubah');
    }

    public function hapusSkema(Request $request){
        $id = Request()->id;
        Skema::where('id',$id)->delete();
        return redirect()->back()->withToastSuccess('Skema Sertifikasi Berhasil Diubah');
    }
}
