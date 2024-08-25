@extends('dashboard.layouts.main')
@section('title', 'Mahasiswa')


@section('page-css')
@endsection

@section('page-content')
    @section('page-title','Mahasiswa')

    @section('page-breadcrumb')
    <li class="breadcrumb-item">level 1</li>
    <li class="breadcrumb-item">level 2</li>
    @endsection


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Card Header Hallo</h3>
        </div>
        <div class="card-body">
            <form action="/submitedmhs" method="post">
                @csrf
                <div class="form-group row">
                    <label for="idmhs" class="col-sm-2 col-form-label">ID Mahasiswa</label>
                    <div class="col-sm-10">
                      <input type="text" name="idmahasiswa" class="form-control" id="idmhs" placeholder="ID Mahasiswa" value="{{ $mahasiswa->idmahasiswa }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{ $mahasiswa->nama }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                      <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" value="{{ $mahasiswa->nim }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_wa" class="col-sm-2 col-form-label">No WA</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_wa" class="form-control" id="no_wa" placeholder="No WA" value="{{ $mahasiswa->no_wa }}">
                    </div>
                </div>
                <button type="submit" class="btn float-right bg-gradient-success">Simpan</button>
            </form>
        </div>
    </div>
    <div class="card">
    </div>
@endsection

@section('page-js')
@endsection
