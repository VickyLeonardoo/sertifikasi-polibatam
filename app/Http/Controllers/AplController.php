<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplController extends Controller
{
    public function viewApl(){
        return view('asesi.viewApl',[
            'title' => 'Data APL',
        ]);
    }
}
