<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $sb_menu = "index";
        $sb_submenu = "index";

        if(!session()->has('users')){
            session()->put('users', ['id']);
        }

        $users = User::all()->toArray();

        return view('dashboard.index', compact('sb_menu', 'sb_submenu','users'));
    }
    
    public function updateUser($iduser){
        $sb_menu = "mahasiswa";
        $sb_submenu = "mastermahasiswa";

        $users = User::find($iduser);   
        
        return view('dashboard.updateuser', compact('sb_menu', 'sb_submenu','users'));
    }

    public function submit_edituser(Request $req){
        $users = User::find($req->post('iduser'));

        $users->name = $req->post('name');
        $users->username = $req->post('username');

        $users->save();

        session()->flash('notif', 'Data Berhasil diupdate');

        return redirect('/dashboard');
    }
}
