<?php
if(!empty($_POST["btnRegistrar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" insert into info_personas(nombre, apellido, dni, fecha_nacimiento, correo) values ('$nombre','$apellido','$dni','$fecha','$correo') ");
        
        if($sql==1) {
            echo '<div class="alert alert-success">Persona registrada exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar Persona</div>';
        }

    } else {
        echo '<div class="alert alert-warning">Algun Campo esta vacio</div>';
    }
}
?>