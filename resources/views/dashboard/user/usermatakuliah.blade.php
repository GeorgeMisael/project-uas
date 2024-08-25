@extends('dashboard.layouts.main')
@section('title', 'Mata Kuliah')

@section('page-title','Mata Kuliah')

@section('page-breadcrumb')
    
@endsection

@section('page-css')
@endsection

@section('page-content')
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
                @can('admin')
                <th>Aksi</th>
                @endcan
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
                        @can('admin')
                        <td>
                            <a href="/editmk/{{ $mk['idmatakuliah'] }}"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="/hapusmk/{{ $mk['idmatakuliah'] }}"><button type="button" class="btn btn-danger">Hapus</button></a>
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

@endsection
