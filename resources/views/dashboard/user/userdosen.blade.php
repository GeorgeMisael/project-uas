@extends('dashboard.layouts.main')
@section('title', 'Dosen')

@section('page-title','Dosen')

@section('page-breadcrumb')
    
@endsection

@section('page-css')
@endsection

@section('page-content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Dosen</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>NIP</th>
                @can('admin')
                <th>Aksi</th>
                @endcan
              </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $dsn )
                    <tr>
                        <td>
                            {{ $loop->index +1 }}
                        </td>
                        <td>
                            {{$dsn['nama'] }}
                        </td>
                        <td>
                            {{$dsn['nip'] }}
                        </td>
                        @can('admin')
                        <td>
                            <a href="/editdosen/{{ $dsn['iddosen'] }}"><button type="button" class="btn btn-warning">Update</button></a>
                            <a href="/hapusdosen/{{ $dsn['iddosen'] }}"><button type="button" class="btn btn-danger ">Hapus</button></a>
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
