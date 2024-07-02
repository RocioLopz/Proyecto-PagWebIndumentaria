<?php

/* $seccion = $_GET['sec'] ?? "home"; */

require_once "libraries/funciones.php";

$secciones_validas = [
     "home" => [
        "titulo" => "Bienvenidos"
     ],
     "nosotros" => [
        "titulo" => "¿Quienes Somos?"
     ],
     "categoria" => [
        "titulo" => "Nuestro Catalogo"
     ],
     "producto" => [
       "titulo" => "Detalle del producto"
     ],
     "contacto" => [
        "titulo" => "Contacto"
     ],
      "preguntas" => [
      "titulo" => "Preguntas Frecuentes"
     ],
     "yo" => [
      "titulo" => "Informacion Personal"
     ],
     "todos" => [
      "titulo" => "Todos los productos"
     ]
  ];

/* operador ternario (if /else) */
 /*  $seccion = isset($_GET['sec']) ? $_GET['sec']  : "home"; */
  
  /* Null coalesce ?? (Operador)
    Si una variable esta difinida y no es null la asigna, sino asigna la aternativa
  */
  $seccion = $_GET['sec'] ?? "home";


  /* Buscar si existe los que viene por sec , y si esta en el array secciones_validas  */

  if(!array_key_exists($seccion, $secciones_validas)){
      $vista= "404";
      $titulo = "404 - pagina no encontrada";
  }else {
     $vista= $seccion;
     $titulo = $secciones_validas[$seccion]['titulo'];
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lopz Indumentaria :: <?= $titulo  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body style="background-color: #B6E2A1;">
  <div class="p-3 mb-2 bg-black text-white">
  <nav class="navbar navbar-expand-lg  "> 
  <div class="container-fluid ">
    <a class="navbar-brand text-white" href="index.php?cat=home"><img width="50" height="50" src="img/logo.png" alt=""> <span style="color: #E493B3;">Lopz</span> Indumentaria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php?cat=home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item" href="index.php?sec=categoria&cat=jean">Jean</a></li>
            <li><a class="dropdown-item" href="index.php?sec=categoria&cat=remera">Remeras</a></li>
            <li><a class="dropdown-item" href="index.php?sec=categoria&cat=camperas">Camperas</a></li>
          </ul>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="index.php?sec=nosotros">Nosotros</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="index.php?sec=contacto">Contacto</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="index.php?sec=preguntas">Preguntas Frecuentes</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="index.php?sec=yo"><i class="fa-regular fa-face-smile"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>


        <!-- require "views/$seccion.php"; -->
        <main class="container">
          <?php
            require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
          ?>
        </main>


  <footer class="d-flex justify-content-around p-3 mb-2 bg-black text-white">
        <div class="Redes">Comunicate con nosotros</div>
        <a href="https://www.instagram.com/indumentaria.lopz/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100069677437712" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <p><i class="fa-solid fa-envelope"></i> lopz.indumentaria@gmail.com</p> 
        </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>