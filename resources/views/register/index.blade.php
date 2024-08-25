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

    <div class="row justify-content-center mt-5">
      <div class="col-md-4 border shadow p-3 mb-5 bg-body-tertiary rounded">
        <main class="form-registration w-100 m-auto">
          <div>
            <img src="{{ asset('img') }}/Unair/kampus-merdeka.png" alt="" width="300rem">
          </div>
          <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
          <form action="/register" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
              <label for="name">Nama</label>
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
              <label for="username">Username</label>
              @error('username')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="password" required>
              <label for="password">Password</label>
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>          
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
            <small>Already registered? <a href="/login">Login</a></small>
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



