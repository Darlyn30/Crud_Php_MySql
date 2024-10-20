<?php

if(!empty($_POST["btnRegistrar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {

        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" update info_personas set nombre='$nombre', apellido='$apellido', dni='$dni', fecha_nacimiento='$fecha', correo='$correo' where id=$id ");

        if($sql == 1) {
            header("location:index.php"); #para redireccionar
            
        } else {
            echo '<div class="alert alert-danger">Error al modificar registro</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacios</div>';
    }
} 

?>