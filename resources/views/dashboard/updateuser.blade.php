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
            <form action="/submiteduser" method="post">
                @csrf
                <div class="form-group row">
                    <label for="iduser" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" name="iduser" class="form-control" id="iduser" placeholder="ID" value="{{ $users->iduser }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="{{ $users->name }}">
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
