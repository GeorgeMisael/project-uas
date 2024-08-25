<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\mataKuliah;
use App\Models\Dosen;


class MasterController extends Controller
{
        // Menu Master
        public function mastermahasiswa()
        {
            $sb_menu = "mahasiswa";
            $sb_submenu = "mastermahasiswa";

            if(!session()->has('mahasiswa')){
                session()->put('mahasiswa', []);
            }
            
            $mahasiswa = Mahasiswa::all()->where('status', '!=', '0')->toArray();
            // $mahasiswa = Mahasiswa::all();

            return view('dashboard.master.mastermahasiswa', compact('sb_menu', 'sb_submenu', 'mahasiswa'));
        }
    
        public function mastermk()
        {
            $sb_menu = "mahasiswa";
            $sb_submenu = "mastermk";

            if(!session()->has('mk')){
                session()->put('mk', []);
            }

            $mataKuliah = mataKuliah::all()->where('status', '!=', '0')->toArray();
    
            return view('dashboard.master.mastermk', compact('sb_menu', 'sb_submenu', 'mataKuliah'));
        }
    
        public function masterkelas()
        {
            $sb_menu = "mahasiswa";
            $sb_submenu = "masterkelas";

            if(!session()->has('kelas')){
                session()->put('kelas', []);
            }
            
            $kelas = Kelas::all()->where('status', '!=', '0')->toArray();

            return view('dashboard.master.masterkelas', compact('sb_menu', 'sb_submenu', 'kelas'));
        }
    
        public function masterdosen()
        {
            $sb_menu = "mahasiswa";
            $sb_submenu = "masterdosen";

            if(!session()->has('dosen')){
                session()->put('dosen', []);
            }
            
            $dosen = Dosen::all()->where('status', '!=', '0')->toArray();

            return view('dashboard.master.masterdosen', compact('sb_menu', 'sb_submenu','dosen'));
        }

        // Submit Button

        public function submitMahasiswa(Request $req)
        {
            $mhs = new Mahasiswa();

            $mhs->nama = $req->nama;
            $mhs->nim = $req->nim;

            $mhs->save();

            session()->flash('notif', 'Data berhasil disimpan!');

            return redirect('/mastermhs');
        }

        public function submitMK(Request $req){
            $mk = new mataKuliah;

            $mk-> nama = $req->nama;
            $mk-> sks = $req->sks;

            $mk->save();
    
            session()->flash('notif', 'Data berhasil disimpan!');

            return redirect('/mastermk');
        }

        public function submitRuangan(Request $req){
            $kelas = new Kelas();

            $kelas-> gedung = $req->gedung;
            $kelas-> kelas = $req->kelas;

            $kelas->save();
    
            session()->flash('notif', 'Data berhasil disimpan!');
            return redirect('/masterkelas');
        }

        public function submitDosen(Request $req){
            $dosen = new Dosen();

            $dosen->nama = $req->nama;
            $dosen->nip = $req->nip;

            $dosen->save();
    
            session()->flash('notif', 'Data berhasil disimpan!');
    
            return redirect('/masterdosen');
        }

        // Update
        public function updateMahasiswa($idmhs){
            $sb_menu = "mahasiswa";
            $sb_submenu = "mastermahasiswa";

            $mahasiswa = Mahasiswa::find($idmhs);   
            
            return view('dashboard.master.updatemahasiswa', compact('sb_menu', 'sb_submenu','mahasiswa'));
        }

        public function submit_editmhs(Request $req){
            $mhs = Mahasiswa::find($req->post('idmahasiswa'));

            $mhs->nama = $req->post('nama');
            $mhs->nim = $req->post('nim');
            $mhs->no_wa = $req->post('nowa');

            $mhs->save();

            session()->flash('notif', 'Data Berhasil diupdate');

            return redirect('/mastermhs');
        }

        public function updateMataKuliah($idmhs){
            $sb_menu = "mahasiswa";
            $sb_submenu = "mastermahasiswa";

            $mataKuliah = mataKuliah::find($idmhs);   
            
            return view('dashboard.master.updatematakuliah', compact('sb_menu', 'sb_submenu','mataKuliah'));
        }

        public function submit_editmk(Request $req){
            $mk = mataKuliah::find($req->post('idmatakuliah'));

            $mk->sks = $req->post('sks');
            $mk->nama = $req->post('nama');

            $mk->save();

            session()->flash('notif', 'Data Berhasil diupdate');

            return redirect('/mastermk');
        }

        public function updateKelas($idkelas){
            $sb_menu = "mahasiswa";
            $sb_submenu = "mastermahasiswa";

            $kelas = Kelas::find($idkelas);   
            
            return view('dashboard.master.updatekelas', compact('sb_menu', 'sb_submenu','kelas'));
        }

        public function submit_editkls(Request $req){
            $kls = Kelas::find($req->post('idkelas'));

            $kls->gedung = $req->post('gedung');
            $kls->kelas = $req->post('kelas');

            $kls->save();

            session()->flash('notif', 'Data Berhasil diupdate');

            return redirect('/masterkelas');
        }

        public function updateDosen($iddosen){
            $sb_menu = "mahasiswa";
            $sb_submenu = "mastermahasiswa";

            $dosen = Dosen::find($iddosen);   
            
            return view('dashboard.master.updatedosen', compact('sb_menu', 'sb_submenu','dosen'));
        }

        public function submit_editdsn(Request $req){
            $dsn = Dosen::find($req->post('iddosen'));

            $dsn->nama = $req->post('nama');
            $dsn->nip = $req->post('nip');

            $dsn->save();

            session()->flash('notif', 'Data Berhasil diupdate');

            return redirect('/masterdosen');
        }

        // Hapus 
        public function hapusMahasiswa($idmhs){
            $mhs = Mahasiswa::find($idmhs);

            $mhs->status = false;
            $mhs->save();
            
            session()->flash('notif','Data berhasil di hapus !');

            return redirect('/mastermhs');
        }

        public function hapusMataKuliah($idmk){
            $mk = mataKuliah::find($idmk);

            $mk->status = false;
            $mk->save();
            
            session()->flash('notif','Data berhasil di hapus !');

            return redirect('/mastermk');
        }

        public function hapusKelas($idkelas){
            $kls = Kelas::find($idkelas);

            $kls->status = false;
            $kls->save();
            
            session()->flash('notif','Data berhasil di hapus !');

            return redirect('/masterkelas');
        }

        public function hapusDosen($iddosen){
            $dsn = Dosen::find($iddosen);

            $dsn->status = false;
            $dsn->save();
            
            session()->flash('notif','Data berhasil di hapus !');

            return redirect('/masterdosen');
        }
}
