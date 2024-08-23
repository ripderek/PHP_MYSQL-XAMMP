<?php
if (!empty($_GET["id"])) {

    $ID = $_GET["id"];
    //$resultado = $var1 . ' observa como concateno ' . $var . ' números: ' . 3 . 4;
    //$consulta = " insert into Personas(Nombres,Apellidos,Correo, FechaNacimiento) values('" . $nombre . "','" . $apellidos . "','" . $Correo . "','" . $FechaNacimiento . "')";
    $consulta = "delete from Personas where ID=" . $ID;
    //$sql = $conexion->query("insert into Personas(Nombres,Apellidos,Correo, FechaNacimiento) values('$nombre','$apellidos','$Correo','$FechaNacimiento') ");
    $sql = $conexion->query($consulta);

    if ($sql == 1) {
        echo '<div class="alert alert-success">Eliminado</div>';
    } else {
        echo '<div class="alert alert-success">Error al eliminar</div>';
    }



}

?>