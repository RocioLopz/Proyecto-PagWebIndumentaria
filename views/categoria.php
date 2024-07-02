<?php

/* require de productos */
 require_once "libraries/productos.php";
  
/* ?? null colasce */
$categoriaSeleccionada = $_GET['cat'] ?? FALSE;

$producto = catalogo_x_categoria($categoriaSeleccionada);

$miTituloBonito = $categoriaSeleccionada ? ucwords(str_replace("_", " ", $categoriaSeleccionada)) : FALSE;

?>

<h1 class="text-center my-5 " style="color: #AD88C6;">Catalogo de <?= $miTituloBonito ?> </h1>
<div class="row">

    <?php if(count($producto))  {   ?> 
    <?php foreach ($producto as $ropa) { ?>
    <div class="col-3">
        <div class="card mb-3 text-center" style="background-color: #FFD0D0">
            <img src="img/<?=$ropa['foto'] ?>" class="card-img-top" alt="" >
            <div class="card-body"  style="height:125px; overflow: hidden; background-color: #FFD0D0">
                <p class="fs-6 m-0 fw-bold text-danger"></p>
                <h5 class="card-title"><?=$ropa['nombre']?></h5>
                <p class="card-text"><?=$ropa['descripcion']?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: #FFD0D0"><?=$ropa['talles']?></li>
                <li class="list-group-item" style="background-color: #FFD0D0"><?=$ropa['stock']?></li>
            </ul>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center"></p>
                <a href="index.php?sec=producto&id=<?= $ropa['id'] ?>" class="btn btn-outline-info w-100 fw-bold" >VER MÁS</a>
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
</div>