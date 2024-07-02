<?php
    $options = [
        "compra" => "Compra",
        "cambio" => "Cambio",
        "devolucion" => "Devolucion",
    ]
?>

<section class="container p-5 mb-3 rounded" style="background-color: #95D2B3 ;">
        <h1 class="text-center" style="color: #AD88C6;">Contactanos</h1>
        
        <div class="col-6 mx-auto">
             <form action="datos/procesar_datos.php" method="POST">
                    <div class="mb-3">
                        <label class="mb-3 form-label text-white" for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label class="mb-3 form-label text-white" for="apellido">Apellido</label>
                        <input class="form-control" type="text" name="apellido" id="apellido" required>
                    </div>

                    <div class="mb-3">
                        <label class="mb-3 form-label text-white" for="correo">Email</label>
                        <input class="form-control" type="email" name="correo" id="correo" required>
                    </div>

                    <p>Tipo de consulta:</p>

                    <?php foreach ($options as $key => $value) { ?>
                            <div class="mb-3">
                                <input type="radio" name="consulta[]" value="<?= $key ?>" >
                                <label class="text-white" for=""><?= $value?></label>

                            </div>
                    <?php } ?>  

                    <div class="mb-3">
                        <label class="form-label text-white" for="mensaje">Mensaje:</label>
                        <textarea class="form-control" name="mensaje" id="mensaje"></textarea>
                    </div>
                    
                    <div class="text-center">
                        <input class="btn btn-success" type="submit" value="Enviar">
                    </div>
             </form>
        </div>
</section>
