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
            <form action="/submiteddsn" method="post">
                @csrf
                <div class="form-group row">
                    <label for="iddosen" class="col-sm-2 col-form-label">ID Dosen</label>
                    <div class="col-sm-10">
                      <input type="text" name="iddosen" class="form-control" id="iddosen" placeholder="ID Dosen" value="{{ $dosen->iddosen }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Dosen</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Dosen" value="{{ $dosen->nama }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                      <input type="text" name="nip" class="form-control" id="nip" placeholder="NIP" value="{{ $dosen->nip }}">
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
