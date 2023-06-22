<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Apl1;
use App\Models\Apl2;
use App\Models\Unit;
use App\Models\Elemen;
use App\Models\Pertanyaan;
use App\Models\Formulir;
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
            'apl' => Formulir::where('user_id', $id)->get(),
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

    public function viewApl2(){
        return view('asesi.viewApl2',[
            'unit' => Unit::all(),
            'title' => 'Apl - 02',
        ]);
    }

    public function viewTinjauApl(){
        $id = Auth::guard('user')->user()->id;
        $id_form = Formulir::where('user_id', $id)->first();
        $apl2 = Apl2::where('formulir_id', $id_form->id)->get();
        $p = $apl2[1]->id;
        $unit = Elemen::where('id', $p)->first();
        $apl = Apl2::where('formulir_id', $id_form->id)->get();

        return view('asesi.viewTinjauApl',[
            'unit' => Unit::all(),
            'title' => 'APL 2 - Tinjau',
            'apl' => Apl2::where('formulir_id', $id_form->id)->get(),
        ]);
    }

    public function simpanFormulirApl2(Request $request){
        $form = Formulir::create([
            'user_id' => Auth::guard('user')->user()->id,
            'status' => 'Menunggu'
        ]);

        $data = [
            [
                'formulir_id' => $form->id,
                'elemen_id' => 1,
                'penilaian' => request()->elemen1,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 2,
                'penilaian' => request()->elemen2,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 3,
                'penilaian' => request()->elemen3,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 4,
                'penilaian' => request()->elemen4,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 5,
                'penilaian' => request()->elemen5,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 6,
                'penilaian' => request()->elemen6,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 7,
                'penilaian' => request()->elemen7,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 8,
                'penilaian' => request()->elemen8,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 9,
                'penilaian' => request()->elemen9,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 10,
                'penilaian' => request()->elemen10,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 11,
                'penilaian' => request()->elemen11,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 12,
                'penilaian' => request()->elemen12,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 13,
                'penilaian' => request()->elemen13,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 14,
                'penilaian' => request()->elemen14,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 15,
                'penilaian' => request()->elemen15,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 16,
                'penilaian' => request()->elemen16,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 17,
                'penilaian' => request()->elemen17,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 18,
                'penilaian' => request()->elemen18,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 19,
                'penilaian' => request()->elemen19,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 20,
                'penilaian' => request()->elemen20,
            ],
            [
                'formulir_id' => $form->id,
                'elemen_id' => 21,
                'penilaian' => request()->elemen21,
            ]
        ];
        foreach ($data as $item) {
            Apl2::create($item);
        }
    }

    public function updateFormulirApl2(Request $request){
        $id = Auth::guard('user')->user()->id;
        $idForm = Formulir::where('user_id', $id)->first();
        $idForms = $idForm->id;

        $data = [
            [
                'penilaian' => request()->elemen1,
            ],
            [
                'penilaian' => request()->elemen2,
            ],
            [
                'penilaian' => request()->elemen3,
            ],
            [
                'penilaian' => request()->elemen4,
            ],
            [
                'penilaian' => request()->elemen5,
            ],
            [
                'penilaian' => request()->elemen6,
            ],
            [
                'penilaian' => request()->elemen7,
            ],
            [
                'penilaian' => request()->elemen8,
            ],
            [
                'penilaian' => request()->elemen9,
            ],
            [
                'penilaian' => request()->elemen10,
            ],
            [
                'penilaian' => request()->elemen11,
            ],
            [
                'penilaian' => request()->elemen12,
            ],
            [
                'penilaian' => request()->elemen13,
            ],
            [
                'penilaian' => request()->elemen14,
            ],
            [
                'penilaian' => request()->elemen15,
            ],
            [
                'penilaian' => request()->elemen16,
            ],
            [
                'penilaian' => request()->elemen17,
            ],
            [
                'penilaian' => request()->elemen18,
            ],
            [
                'penilaian' => request()->elemen19,
            ],
            [
                'penilaian' => request()->elemen20,
            ],
            [
                'penilaian' => request()->elemen21,
            ]
        ];

        foreach ($data as $item) {
            Apl2::where('formulir_id', $idForms)->update($item);
        }
        return redirect()->back()->withToastSuccess('APL 02 Berhasil Diupdate');
    }
}
