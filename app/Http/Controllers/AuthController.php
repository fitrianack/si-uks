<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Userr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function postlogin (Request $request){
        $username = $request->username;
        $password = $request->password;

        $query = Userr::where('username', $username)->first();

        if ($query) {
          if ($password==$query->password) {
              Session::put('username', $query->username);
              Session::put('login', TRUE);
              return redirect('/home');
          }else {
              return redirect('/login')->with('alert', 'Username dan Password Salah!');
          }
        }else {
            return redirect('/login')->with('alert', 'Data tidak ada!');
        }
    }

    public function getRegister(){
        if (Session::get('email')) {
            return redirect('home');
        }else {
            return view('auths.register');
        }
    }

    public function postRegister(Request $req){
        if ($request->isMethod('post')){
            $this->validate($req, [
                'nama_lengkap' => 'required|string|min:4',
                'email' => 'required|unique:users',
                'password' => 'required|string|min:5',
                'konfirm_password' => 'required|same:password'
            ]);
    
            Userr::create([
                'name' => $req->nama,
                'email' => $req->email,
                'password' => bcrypt($req->password)
            ]);
            return redirect('/login')->with('alert-success', 'Kamu berhasil mendaftar!');
        }
    }

    public function logout(){
        Session::flush();

        return redirect('/')->with('alert', 'Anda telah logout');
    }
}