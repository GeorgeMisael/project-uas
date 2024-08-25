<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universitas Airlangga</title>

    {{-- CSS Link --}}
    <link rel="stylesheet" href="{{ asset('css') }}/style.css">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    @if (session()->has('success'))
      <div class="alert alert-success alert-dissmissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
      </div>
    @endif

    @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dissmissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
      </div>
    @endif
        
    <div class="row justify-content-center mt-5">
      <div class="col-md-4 border shadow p-3 mb-5 bg-body-tertiary rounded">
        <main class="form-signin w-100 m-auto">
          <div>
            <img src="{{ asset('img') }}/Unair/kampus-merdeka.png" alt="" width="300rem">
          </div>
          <h1 class="h3 mb-3 fw-normal">Please login</h1>
          <form action="/login" method="post">
            @csrf
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="Email address" value="{{ old('email') }}" autofocus required>
              <label for="email">Email Address</label>
              @error('email')
                <div class="invalid-feedback"></div>
                {{ $message }}
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>
            <small>Not registered? <a href="/register">Register Now!</a></small>
            <small>
              <p class="mt-3 mb-3 text-body-secondary">&copy;2024 George Misael</p>
            </small>
          </form>
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

