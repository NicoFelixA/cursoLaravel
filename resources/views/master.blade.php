<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de control escolar CETIS 107</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<<<<<<< HEAD
    <script src="{{ asset('jquery-3.7.1.js') }}"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
=======
    <script src="{{ asset('code.jquery.com_jquery-3.7.1.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: blue;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Control Escolar
          </a>
>>>>>>> 2ee836460afb14144f06cb5f3cf25a187ff1429c
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
=======
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Alumnos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Registrar alumno</a></li>
                  <li><a class="dropdown-item" href="#">Consultar alumnos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Ir al inicio</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
>>>>>>> 2ee836460afb14144f06cb5f3cf25a187ff1429c
            </form>
          </div>
        </div>
    </nav>
<<<<<<< HEAD
    
      <div class="container">
            <div class="row">
                <div class="col-12">
                    @yield('contenido')
                </div>
            </div>
      </div>

      <footer><hr>

        Sistema de control escolar &copy; 2023
    
      </footer>
      <script src="{{ asset('js/bootstrap.js') }}"></script>

      
</body>
</html>
=======

    <div class="container">
        <div class="row">
            <div class="col-12 card mt-3">
                @yield('contenido')
            </div>
        </div>
    </div>

    <footer class="text-center"><hr>
        Sistema de control escolar &copy; 2023
    </footer>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
>>>>>>> 2ee836460afb14144f06cb5f3cf25a187ff1429c
