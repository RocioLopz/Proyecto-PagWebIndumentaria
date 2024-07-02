<?php

/* require de productos */
 require_once "libraries/productos.php";
  
$productos = catalogo_todos_productos();

/* var_dump($productos); */

?>

<h1 class="text-center my-5 ">Todos los productos</h1>

<div class="row">

<?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $ropa) { ?>
    
    <div class="col-3">
        <div class="card mb-3">
            <img src="img/<?=$ropa['foto']?>" class="card-img-top" alt="">
            <div class="card-body">
                <p class="fs-6 m-0 fw-bold text-danger"></p>
                <h5 class="card-title"><?=$ropa['nombre']?></h5>
                <p class="card-text"><?=$ropa['precio']?></p>
            </div>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center"></p>
                <a href="index.php?sec=producto&id=<?= $ropa['id'] ?>" class="btn btn-danger w-100 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mb-5">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>