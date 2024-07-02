<?php
/* producto destacado */

require_once "libraries/productos.php";
$producto = producto_destacado();

?>
<style>
 body{
  background-color: #B6E2A1;
 }
</style>
<img src="img/banner.webp" class="img-fluid" alt="...">


<h1 class="text-center my-5" style="color: #AD88C6;">Productos Destacados</h1>

<div class="row d-flex justify-content-center">
  <?php
  foreach ($producto as $ropa) { ?>

    <div class="card m-2 " style="width: 18rem; background-color: #FFD0D0">
      <img src="img/<?=$ropa['foto']?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><?= $ropa['nombre'] ?></h5>
        <p class="card-text text-center">$<?= $ropa['precio'] ?>.</p>
        <a href="index.php?sec=producto&id=<?= $ropa['id'] ?>" class="btn btn-outline-info w-100 fw-bold">COMPRAR</a>
      </div>
    </div>

  <?php } ?>


  <div class="mt-1 mb-5">
        <h2 class="text-center">Ver todo nuestro catalogo</h2>

        <a href="index.php?sec=todos">
            <img width="400" class="d-block mx-auto" src="img/catalogo.webp" alt="">
        </a>

</div>