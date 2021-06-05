<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $id = session()->get('id');
        if ($id) {
            return view('dashboard');
        }
        return redirect()->route('login');
    }
    public function postlogin(Request $request)
    {
        try {
            /* cek login */
            $credentials = request(['email', 'password']);
            $email = $request->email;
            $password = $request->password;

            $user = User::where('email', $request->email)->first();
            $id = $user->id;
            if ($request->password != $user->password) {
                return redirect('login');
            } else {
                session(['id' => $id]);
                return view('dashboard');
            }
        } catch (Exception $error) {
            return redirect('login');
        }
    }

    public function biodata()
    {
        $id = session()->get('id');
        if ($id) {
            $query = DB::select("SELECT * FROM mahasiswa WHERE id = '$id'");
            return view('biodata')
                ->with('user', $query);
        }
        return redirect()->route('login');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
