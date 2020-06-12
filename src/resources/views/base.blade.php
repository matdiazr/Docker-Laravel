<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Scout</title>
  <link rel="stylesheet" href={{ asset("asset/css/bootstrap.min.css")}} >
  <link rel="stylesheet" href={{ asset("asset/css/project/base.css")}} >
  <script src= {{ asset("asset/js/bootstrap.min.js")}} ></script>
</head>

<body>
  <header>
    <div class="container">
      <h2 class="mb-3">Grupo Scout</h2>
    </div>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('noticias') }}">Noticias</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('portada') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('staff') }}">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ramas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('ramas', 'lobatos') }}">Lobatos</a>
                <a class="dropdown-item" href="{{ route('ramas', 'golondrinas') }}">Golondrina</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#}" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <a class="dropdown-item" href="{{ route('noticias.form') }}">Posts</a>
                <a class="dropdown-item" href="{{ route('staff.form') }}">Staff</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
    </div>  
  </header>

  {{-- <div class="container content-yield"> --}}
    @yield('content')
  {{-- </div> --}}
  <footer>
    <div class="container-fluid">
      <h3 class="pt-2">Develop in 2020</h3>
    </div>
  </footer>
</body>

<script src={{ asset("asset/js/jquery-3.5.1.slim.min.js")}}></script>
<script src={{ asset("asset/js/bootstrap.bundle.min.js")}}></script>
<script src={{ asset("asset/js/popper.min.js")}}></script>
</html>