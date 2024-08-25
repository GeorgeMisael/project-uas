@extends('dashboard.layouts.main')
@section('title', 'Master Mata Kuliah')

@section('page-title','Master Mata Kuliah')

@section('page-breadcrumb')
    <li class="breadcrumb-item">Mahasiswa</li>
    <li class="breadcrumb-item">Master Mata Kuliah</li>
@endsection

@section('page-css')
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/toastr/toastr.min.css">
@endsection

@section('page-content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Input Mata Kuliah</h3>
    </div>    

    <div class="card-body">
        <form action="/submitmk" method="POST">
            @csrf
            <div class="form-group row">
                <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                  <input name="sks" type="text" class="form-control" id="sks" placeholder="Masukkan SKS">
                </div>
            </div>
            <div class="form-group row">
                <label for="nm" class="col-sm-2 col-form-label">Mata Kuliah</label>
                <div class="col-sm-10">
                  <input name="nama" type="text" class="form-control" id="nm" placeholder="Masukkan nama">
                </div>
            </div>
            <button type="submit" class="btn bg-gradient-success float-right">Simpan</button>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Mata Kuliah</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>SKS</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($mataKuliah as $mk )
                    <tr>
                        <td>
                            {{ $loop->index +1 }}
                        </td>
                        <td>
                            {{$mk['sks'] }}
                        </td>
                        <td>
                            {{$mk['nama'] }}
                        </td>
                        <td>
                            <a href="/editmk/{{ $mk['idmatakuliah'] }}"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="/hapusmk/{{ $mk['idmatakuliah'] }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('page-js')
    <!-- Toastr -->
    <script src="{{ asset('AdminLTE') }}/plugins/toastr/toastr.min.js"></script>

    <script>
        $(window).on("load",function(){
            @if (session()->has('notif'))
                toastr.success('{{ session('notif') }}')
            @endif
        });
    </script>
@endsection
