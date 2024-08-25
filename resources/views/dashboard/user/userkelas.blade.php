@extends('dashboard.layouts.main')
@section('title', 'Kelas')

@section('page-title','Kelas')

@section('page-breadcrumb')
    
@endsection

@section('page-css')
@endsection

@section('page-content')
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
                @can('admin')
                <th>Aksi</th>
                @endcan
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
                        @can('admin')
                        <td>
                            <a href="/editkelas/{{ $kls['idkelas'] }}"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="/hapuskelas/{{ $kls['idkelas'] }}"><button type="button" class="btn btn-danger">Hapus</button></a>
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
