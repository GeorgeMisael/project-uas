@extends('dashboard.layouts.main')
@section('title', 'Mahasiswa')


@section('page-css')
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/toastr/toastr.min.css">
@endsection

@section('page-content')
    @section('page-title','Mahasiswa')

    @section('page-breadcrumb')

    @endsection


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Input Mahasiswa</h3>
        </div>
        <div class="card-body">
            <form action="/submitmhs" method="post">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                      <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">
                    </div>
                </div>
                <button type="submit" class="btn float-right bg-gradient-success">Simpan</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Mahasiswa</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">No.</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    @can('admin')    
                    <th>Aksi</th>
                    @endcan
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs )
                        <tr>
                        <td>
                            {{ $loop->index + 1 }}
                        </td>
                        <td>
                            {{ $mhs['nama'] }}
                        </td>
                        <td>
                            {{ $mhs['nim'] }}
                        </td>
                        @can('admin')
                        <td>
                            <a href="/editmhs/{{ $mhs['idmahasiswa'] }}"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="/hapusmhs/{{ $mhs['idmahasiswa'] }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </td>    
                        @endcan
                        
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
        $(window).on("load", function(){
            @if(session()->has('notif'))
                toastr.success('{{ session('notif') }}');
            @endif
        });
    </script>
@endsection
