@extends('layouts.main')

@section('container')

<div class="row gy-3 gy-lg-0 align-items-lg-center justify-content-lg-between">
<div class="col-12 col-lg-6 order-1 order-lg-0">
    <h1 class="display-3 fw-bolder mb-3">
        <br>Universitas Airlangga.
    </h1>
    <p class="fs-4 mb-5">
        <span style="font-size:14px"><b>Humble, Honest, Helpful, Excellent, Brave, Agile &amp; Transcendent.</b></span><br>
    </p>
  
  <div class="d-grid gap-2 d-sm-flex">
    <a href="/login">
       <button type="button" class="btn btn-primary bsb-btn-2xl rounded-pill">Login</button>
    </a>
                            
  </div>
</div>

<div class="col-12 col-lg-5 text-center">
    <img class="img-fluid" loading="lazy" src="{{ asset('img/HOME.png') }}">
  </div>
</div>

@endsection