<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Matkul;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\View;

class DosenController extends Controller
{
    public function profile($id)
    {
        $matkul = Matkul::find($id)->dosen;
        $dosen = Dosen::find($id)->matkul;


        return view('dosen', ['dosen' => $dosen, 'matkul' => $matkul]);

        // return Dosen::find($id)->matkul;
    }

    public function dosen()
    {
        $id = session()->get('id');
        if ($id) {
            $dosen = Dosen::all();
            return view('listdosen', ['dosen' => $dosen]);
        }
        return redirect()->route('login');
    }
}
