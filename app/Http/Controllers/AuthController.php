<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
    public function validasi(Request $request){
    $request->validasi('user', [
        'no_hp' => ['required', 'unique:posts', 'max:255'],
        'password' => ['required'],
    ]);
    }
    public function user(){
        $user = User::paginate();
        return view('user',['user' => $user]);
    }

    public function formuliruser(){
        return view('formuliruser');
    }

    public function homeuser(){
        return view('homeuser');
    }

    public function simpanuser(Request $request){
        $user = User::create([
        'nik_user' => $request->nik_user,
        'nama_user' => $request->nama_user,
        'no_hp' => $request->no_hp,
        'password' => bcrypt ($request->password)
        ]);
        return redirect('/user')->with('tambah', 'Data Berhasil Ditambahkan');
    }

    public function deleteuser($id){
        $mahasiswa = User::find($id);
        $mahasiswa -> delete();
        return redirect('/user')->with('hapus', 'Data Berhasil Dihapus');
    }

    public function login(){
        return view('login');
    }

    public function ceklogin(Request $request){
        if(!Auth::attempt(['no_hp' => $request->no_hp, 'password' => $request->password]))
        {
            return redirect('/login');
        }
        else
        {
            return redirect('/home');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login')->with('keluar', 'Anda Berhasil Keluar');
    }
} 