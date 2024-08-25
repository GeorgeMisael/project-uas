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
            <form action="/submitedkelas" method="post">
                @csrf
                <div class="form-group row">
                    <label for="idkelas" class="col-sm-2 col-form-label">ID Kelas</label>
                    <div class="col-sm-10">
                      <input type="text" name="idkelas" class="form-control" id="idkelas" placeholder="ID Kelas" value="{{ $kelas->idkelas }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gedung" class="col-sm-2 col-form-label">Gedung</label>
                    <div class="col-sm-10">
                      <input type="text" name="gedung" class="form-control" id="gedung" placeholder="Nama" value="{{ $kelas->gedung }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                      <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Kelas" value="{{ $kelas->kelas }}">
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
