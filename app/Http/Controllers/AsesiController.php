<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Apl1;
class AsesiController extends Controller
{
    public function index(){
        return view('asesi.index',[
            'title' => 'Dashboard Asesi',
        ]);
    }

    public function viewProfile(){
        return view('asesi.viewProfile',[
            'title' => 'Identitas Asesi',
            'profile' => User::where('id',Auth::guard('user')->user()->id)->first(),
        ]);
    }

    public function viewApl(){
        $id = Auth::guard('user')->user()->id;
        return view('asesi.viewApl',[
            'title' => 'Data APL',
            'apl' => Apl1::where('user_id', $id)->get(),
        ]);
    }
}
