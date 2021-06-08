<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $mhs = DB::table('mahasiswa')->get();

        return view('admin/mahasiswa', ['mahasiswa' => $mhs]);
    }

    public function tambahmhs()
    {

        return view('admin/tambahmhs');
    }

    // method untuk insert data ke table mahasiswa
    public function storemhs(Request $request)
    {

        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenjang' => $request->jenjang,
            'fakultas' => $request->fakultas,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'seleksi' => $request->seleksi,
            'status' => $request->status,
            'id_user' => $request->id_user
        ]);

        return redirect('/mahasiswa');
    }


    public function editmhs($id)
    {

        // mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('admin/editmhs', ['mahasiswa' => $mahasiswa]);
    }
    // update data mahasiswa
    public function updatemhs(Request $request)
    {

        // update data mahasiswa
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenjang' => $request->jenjang,
            'fakultas' => $request->fakultas,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'seleksi' => $request->seleksi,
            'status' => $request->status,
            'id_user' => $request->id_user
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    // method untuk hapus data mahasiswa
    public function hapusmhs($id)
    {

        // menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('mahasiswa')->where('id', $id)->delete();

        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    public function matkul()
    {

        // mengambil data dari table mahasiswa
        $matkul = DB::table('matkul')->get();

        return view('admin/matkul', ['matkul' => $matkul]);
    }

    public function tambahmatkul()
    {

        // memanggil view tambah
        return view('admin/tambahmatkul');
    }

    // method untuk insert data ke table mahasiswa
    public function storematkul(Request $request)
    {
        // insert data ke table mahasiswa

        DB::table('matkul')->insert([
            'dosen_id' => $request->dosen_id,
            'kode_matkul' => $request->kode_matkul,
            'nama' => $request->nama,
            'semester' => $request->semester
        ]);

        return redirect('/matkul');
    }

    public function editmatkul($id)
    {


        $matkul = DB::table('matkul')->where('id', $id)->get();
        return view('admin/editmatkul', ['matkul' => $matkul]);
    }
    // update data mahasiswa
    public function updatematkul(Request $request)
    {
        // update data mahasiswa


        DB::table('matkul')->where('id', $request->id)->update([
            'dosen_id' => $request->dosen_id,
            'kode_matkul' => $request->kode_matkul,
            'nama' => $request->nama,
            'semester' => $request->semester
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/matkul');
    }

    public function hapusmatkul($id)
    {


        // menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('matkul')->where('id', $id)->delete();

        // alihkan halaman ke halaman mahasiswa
        return redirect('/matkul');
    }

    public function dosen()
    {

        // mengambil data dari table mahasiswa
        $dosen = DB::table('dosen')->get();

        return view('admin/dosen', ['dosen' => $dosen]);
    }

    public function tambahdosen()
    {

        // memanggil view tambah
        return view('admin/tambahdosen');
    }
    public function storedosen(Request $request)
    {

        // insert data ke table mahasiswa
        DB::table('dosen')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        return redirect('/dosenadm');
    }

    public function editdosen($id)
    {

        // mengambil data mahasiswa berdasarkan id yang dipilih
        $dosen = DB::table('dosen')->where('id', $id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('admin/editdosen', ['dosen' => $dosen]);
    }
    // update data mahasiswa
    public function updatedosen(Request $request)
    {

        // update data mahasiswa
        DB::table('dosen')->where('id', $request->id)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/dosenadm');
    }

    public function hapusdosen($id)
    {

        // menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('dosen')->where('id', $id)->delete();

        // alihkan halaman ke halaman mahasiswa
        return redirect('/dosenadm');
    }
}
