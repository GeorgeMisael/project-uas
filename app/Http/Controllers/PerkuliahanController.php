<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkuliahanController extends Controller
{
            // Menu Master
            public function jadwalKuliah()
            {
                $sb_menu = "perkuliahan";
                $sb_submenu = "jadwalKuliah";
        
                return view('dashboard.perkuliahan.jadwalKuliah', compact('sb_menu', 'sb_submenu'));
            }
        
            public function jadwalUjian()
            {
                $sb_menu = "perkuliahan";
                $sb_submenu = "jadwalUjian";
        
                return view('dashboard.perkuliahan.jadwalUjian', compact('sb_menu', 'sb_submenu'));
            }
            
            public function absenMahasiswa()
            {
                $sb_menu = "perkuliahan";
                $sb_submenu = "absenMahasiswa";
        
                return view('dashboard.perkuliahan.absenMahasiswa', compact('sb_menu', 'sb_submenu'));
            }
        
            public function nilaiMahasiswa()
            {
                $sb_menu = "perkuliahan";
                $sb_submenu = "nilaiMahasiswa";
                
                return view('dashboard.perkuliahan.nilaiMahasiswa', compact('sb_menu', 'sb_submenu'));
            }
}
