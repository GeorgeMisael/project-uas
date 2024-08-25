<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mataKuliah;
use App\Models\Dosen;
use App\Models\Kelas;


class UserController extends Controller
{
    public function userMataKuliah(){
        $sb_menu = "user";
        $sb_submenu = "usermatakuliah";

        if(!session()->has('mk')){
            session()->put('mk', []);
        }
        $mataKuliah = mataKuliah::all()->toArray();

        return view('dashboard.user.usermatakuliah', compact('sb_menu', 'sb_submenu','mataKuliah'));
    }

    public function userDosen(){
        $sb_menu = "user";
        $sb_submenu = "userdosen";

        
        if(!session()->has('dosen')){
            session()->put('dosen', []);
        }
        
        $dosen = Dosen::all()->where('status', '!=', '0')->toArray();

        return view('dashboard.user.userdosen', compact('sb_menu', 'sb_submenu', 'dosen'));
    }

    public function userKelas(){
        $sb_menu = "user";
        $sb_submenu = "userkelas";

        
        if(!session()->has('kelas')){
            session()->put('kelas', []);
        }
        
        $kelas = Kelas::all()->where('status', '!=', '0')->toArray();

        return view('dashboard.user.userkelas', compact('sb_menu', 'sb_submenu','kelas'));
    }
}
