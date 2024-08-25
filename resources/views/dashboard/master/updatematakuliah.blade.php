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
            <form action="/submitedmk" method="post">
                @csrf
                <div class="form-group row">
                    <label for="idmk" class="col-sm-2 col-form-label">ID Mata Kuliah</label>
                    <div class="col-sm-10">
                      <input type="text" name="idmatakuliah" class="form-control" id="idmk" placeholder="ID Mata Kuliah" value="{{ $mataKuliah->idmatakuliah }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                      <input type="text" name="sks" class="form-control" id="sks" placeholder="SKS" value="{{ $mataKuliah->sks }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Mata Kuliah</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="NIM" value="{{ $mataKuliah->nama }}">
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
