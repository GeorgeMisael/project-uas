@extends('dashboard.layouts.main')
@section('title', 'Master Kelas')

@section('page-title','Master Kelas')

@section('page-breadcrumb')
    <li class="breadcrumb-item">Mahasiswa</li>
    <li class="breadcrumb-item">Master Kelas</li>
@endsection

@section('page-css')
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/toastr/toastr.min.css">
@endsection

@section('page-content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Input Kelas</h3>
    </div> 
    <div class="card-body">
        <form action="/submitruang" method="POST">
            @csrf
            <div class="form-group row">
                <label for="ng" class="col-sm-2 col-form-label">Nama Gedung</label>
                <div class="col-sm-10">
                  <input name="gedung" type="text" class="form-control" id="ng" placeholder="Masukkan nama gedung">
                </div>
            </div>
            <div class="form-group row">
                <label for="nr" class="col-sm-2 col-form-label">Nama Kelas</label>
                <div class="col-sm-10">
                  <input name="kelas" type="text" class="form-control" id="nr" placeholder="Masukkan kelas">
                </div>
            </div>
            
            <button type="submit" class="btn bg-gradient-success float-right">Simpan</button>
            </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Kelas</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Gedung</th>
                <th>Ruangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $kls )
                    <tr>
                        <td>
                            {{ $loop->index +1 }}
                        </td>
                        <td>
                            {{$kls['gedung'] }}
                        </td>
                        <td>
                            {{$kls['kelas'] }}
                        </td>
                        <td>
                            <a href="/editkelas/{{ $kls['idkelas'] }}"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="/hapuskelas/{{ $kls['idkelas'] }}"><button type="button" class="btn btn-danger">Hapus</button></a>
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
