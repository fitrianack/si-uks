<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use App\Obat;
use App\Periksa;
use App\Rekam;
use App\Sarana;
use App\Siswa;
use App\Userr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class WaliController extends Controller
{
    public function home (){
        $count_obat = Obat::all()->count();
        $count_sarana = Sarana::all()->count();
        $count_siswa = Siswa::all()->count();
        $count_agenda = Agenda::all()->count();
        $count_rekam = Rekam::all()->count();
        $count_periksa = Periksa::all()->count();
        return view ('wali_murid.content.home', compact('count_agenda', 'count_obat', 'count_sarana', 'count_siswa', 'count_rekam', 'count_periksa'));
    }
    public function profil(){
        if (!Session::get('login')) {
            return redirect('/login')->with('alert', 'Kamu harus login dulu!');
        }else {
            $user = Session::get('username');
            $userr = Userr::where('username', $user)->first();
            return view ('wali_murid.content.profil', compact('userr'));
        }
    }
    public function edit (){
        if (!Session::get('login')) {
            return redirect('/login')->with('alert', 'Kamu harus login dulu!');
        }else {
            $user = Session::get('username');
            $userr = Userr::where('username', $user)->first();
            return view ('wali_murid.content.edit-profil', compact('userr'));
        }
    }
    public function update(Request $request){
        if (!Session::get('login')) {
            return redirect('/login')->with('alert', 'Kamu harus login dulu!');
        }else {
            $user = Session::get('username');
            $userr = Userr::where('username', $user)->first();

            if ($request->isMethod('post')) {
                
                $data = $request->all();

                Userr::where(['username'=>$user])->update([
                    'nama_lengkap'=>$data['nama_lengkap'],
                    'username'=>$data['username'],
                    'password'=>$data['password'],
                    'phone'=>$data['phone'],
                    'alamat'=>$data['alamat']
                    ]);
                return redirect('/profil');
            }
        }
    }
    public function agenda(){
        $agenda = \App\Agenda::all();
        return view('wali_murid.content.agenda', compact('agenda'));
    }
    public function rapor(){
        return view('wali_murid.content.rapor');
    }
    public function login(){
        return view('wali_murid.content.login');
    }
    public function register(){
        return view('wali_murid.content.register');
    }
}
