<?php
require_once "libraries/productos.php";

$id = $_GET['id'] ?? FALSE;

$ropa = producto_x_id($id);

?>


<div class="row">
     <?php if(isset($ropa)) { ?>
       <h1 class="text-center my-5"><?=$ropa['tipo']?></h1>
       <div class="col">
            <div class="card mb-5" style="background-color: #FFD0D0">
                <div class="row g-0">
                        <div class="col-5">
                            <img class="img-fluid rounded-start" src="img/<?= $ropa['foto'] ?>" alt="<?= $ropa['nombre'] ?>">
                        </div>
                        <div class="col-7 d-flex flex-column p-3 ">
                            <div class="card-body flex-grow-0">
                                <p class="fs-4 m-0 fw-bold text-danger"></p>
                                <h2 class="card-title fs-2 mb-4"><?= $ropa['nombre'] ?></h2>
                                <p class="card-text"><?=$ropa['descripcion']?></p>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item" style="background-color: #FFD0D0"><?=$ropa['talles']?></li>
                                <li class="list-group-item" style="background-color: #FFD0D0"><?=$ropa['stock']?></li>
                            </ul>

                            <div class="card-body">
                                 <h2 class="card-title fs-6 mb-4 text-danger">Medios de Pago</h2>
                                 <div class="d-flex">
                                     <i class="fa-brands fa-cc-visa me-3 fs-3 text-info"></i>
                                     <i class="fa-brands fa-cc-mastercard me-3 fs-3 text-warning"></i>
                                     <i class="fa-solid fa-money-bill me-3 fs-3 text-primary-emphasis"></i>
                                     <i class="fa-solid fa-credit-card me-3 fs-3 text-success"></i>
                                  </div>
                            </div>
                            
                            <div class="card-body">
                                <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?=$ropa['precio'] ?></p>
                                <a href="#" class="btn btn-outline-info w-100 fw-bold" >COMPRAR</a>
                            </div>



                        </div>

                </div>

            </div>
       </div>
    <?php } else { ?>
        <h2 class="text-center m-5 text-danger">No se encontro el producto deseado</h2>
    
    <?php } ?>
    

</div>



