<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <script src="https://unpkg.com/chart.js@2.8.0/dist/Chart.bundle.js"></script>
    <script src="https://unpkg.com/chartjs-gauge@0.3.0/dist/chartjs-gauge.js"></script>
    <link rel="stylesheet" href="/public/css/style.css">
  </head>
  <body class="bg-dark">


    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mb-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="/public/images/logoArcanum.png" alt="" width="50" height="50" class="d-inline-block align-text-top"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Diseño de Recetas
            </a>
            <ul class="dropdown-menu bg-danger" aria-labelledby="navbarDropdownMenuLink">

              <li><a class="dropdown-item" href="#">Confección de Recetas</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Control de Procesos
            </a>
            <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/dashboard/movimientos">Movimientos</a></li>
              <li><a class="dropdown-item" href="#">Molienda</a></li>
              <li><a class="dropdown-item" href="#">Precalentado</a></li>
              <li><a class="dropdown-item" href="#">Maceración</a></li>
              <li><a class="dropdown-item" href="#">Cocción</a></li>
              <li><a class="dropdown-item" href="#">Medición de Volumen</a></li>
              <li><a class="dropdown-item" href="#">Fermentación</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reportes
            </a>
            <ul class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Eficiencia</a></li>
              <li><a class="dropdown-item" href="#">Tiempos</a></li>

            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Stock
            </a>
            <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">item1</a></li>

            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Configuración
            </a>
            <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Equipo</a></li>
              <li><a class="dropdown-item" href="#">Software</a></li>
              <li><a class="dropdown-item" href="#">Cuenta</a></li>
            </ul>
          </li>

          <li class="nav-item">
          <a class="nav-link text-dark " href="#">Logout</a>
        </li>



        </ul>
      </div>
    </div>
  </nav>

          <p class="bg-warning text-light text-center " id="estadoConexion">Conexión con Broker</p>
