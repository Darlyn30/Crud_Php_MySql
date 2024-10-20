<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud php y mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- ICON AWESOME -->
</head>
  <body>

<script>
    function eliminar() {
        var res = confirm("Estas seguro que deseas eliminar?");
        return res;
    }
</script>

    <h1 class="text-center p-3">Hello, world!</h1>
    <?php
    include "Models/Conexion.php";
    include "Controller/Eliminar_persona.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center alert alert-secondary">Registro de personas</h3>
            <?php

            include "Controller/Registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-3">
            <table class="table">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">DNI</th>
                        <th scope="col">FECHA DE NACIMIENTO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "Models/Conexion.php"; #importamos el archivo de donde proviene la conexion del archivo .php
                    $sql=$conexion->query(" select * from info_personas "); #la sentencia SQL que vamos a ejecutar

                    while($datos=$sql->fetch_object()){?>
                        <tr>
                        <td><?= $datos->id #tenemos que importar de esta forma para buscar en la db?></td>
                        <td><?= $datos->nombre?></td>
                        <td><?= $datos->apellido?></td>
                        <td><?= $datos->dni?></td>
                        <td><?= $datos->fecha_nacimiento?></td>
                        <td><?= $datos->correo?></td>
                        <td>
                            <a href="Modificar_persona.php?id=<?=$datos->id?>" class="btn btn-small btn-warning"><i class="fa fa-edit"></i></a>
                            <a onclick="return eliminar()" href="index.php?id=<?=$datos->id?>" class="btn btn-small btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>