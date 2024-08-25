@extends('dashboard.layouts.main')
@section('title', 'Master Dosen')

@section('page-title','Master Dosen')

@section('page-breadcrumb')
    <li class="breadcrumb-item">Mahasiswa</li>
    <li class="breadcrumb-item">Master Dosen</li>
@endsection

@section('page-css')
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/toastr/toastr.min.css">
@endsection

@section('page-content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Input Dosen</h3>
    </div>    
    <div class="card-body">
        <form action="/submitdosen" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nm" class="col-sm-2 col-form-label">Nama Dosen</label>
                <div class="col-sm-10">
                  <input name="nama" type="text" class="form-control" id="nm" placeholder="Masukkan nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                  <input name="nip" type="number" class="form-control" id="nip" placeholder="Masukkan NIP">
                </div>
            </div>
            
            <button type="submit" class="btn bg-gradient-success float-right">Simpan</button>
            </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Dosen</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $dsn )
                    <tr>
                        <td>
                            {{ $loop->index +1 }}
                        </td>
                        <td>
                            {{$dsn['nama'] }}
                        </td>
                        <td>
                            {{$dsn['nip'] }}
                        </td>
                        <td>
                            <a href="/editdosen/{{ $dsn['iddosen'] }}"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="/hapusdosen/{{ $dsn['iddosen'] }}"><button type="button" class="btn btn-danger ">Hapus</button></a>
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
