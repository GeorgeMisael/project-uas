@extends('dashboard.layouts.main')
@section('title', 'Dashboard')


@section('page-css')

@endsection

@section('page-content')

  <h3>BIODATA</h3>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Biodata Anda</h3>
  </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Nama</th>
          <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
          <th>Username</th>
          <td>{{ auth()->user()->username }}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{ auth()->user()->email }}</td>
        </tr>
      </table>
  </div>
</div>
  

@endsection

@section('page-js')

@endsection
