@extends('dashboard.layouts.main')
@section('title', 'Dashboard')


@section('page-css')

@endsection

@section('page-content')
    @section('page-title','Nilai Mahasiswa')

    @section('page-breadcrumb')
    <li class="breadcrumb-item">level 1</li>
    <li class="breadcrumb-item">level 2</li>
    @endsection


    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Card Header Hallo</h3>
        </div>
        <div class="card-body">
        Hello World
        </div>
    </div>
@endsection

@section('page-js')

@endsection
