<?php

include "Models/Conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select * from info_personas where id=$id ");




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
        <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center alert alert-secondary">Modificar Registro</h3>
            <input type="hidden" class="form-control" name="id" value="<?= $_GET["id"]?>">
            <?php

            include "Controller/Modificar_persona.php";

            while($datos=$sql->fetch_object()) {?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?=$datos->nombre?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="<?=$datos->apellido?>"> 
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">DNI</label>
                    <input type="text" class="form-control" name="dni" value=<?=$datos->dni?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha" value="<?=$datos->fecha_nacimiento?>"> 
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo" value="<?=$datos->correo?>">
                </div>
            <?php }

            ?>

            <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Modificar</button>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>