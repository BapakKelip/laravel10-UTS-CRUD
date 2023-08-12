<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset("/") }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css">

    <title>CRUD</title>
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold">CRUD SIMPLE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ (request()->segment('1')=='home') ? 'active' : '' }}" aria-current="page" href="{{ url('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->segment('1')=='pesertas') ? 'active' : '' }}" href="{{ url('pesertas') }}">Daftar Calon Peserta</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- End Navbar --}}

    {{-- content --}}
        @yield('content')
    {{-- End Content --}}
    <script src="{{ asset("/") }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
