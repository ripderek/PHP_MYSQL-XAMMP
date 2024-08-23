<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["Correo"]) and !empty($_POST["FechaNacimiento"])) {
        $nombre = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $FechaNacimiento = $_POST["FechaNacimiento"];
        $Correo = $_POST["Correo"];
        $ID = $_POST["ID"];
        //$resultado = $var1 . ' observa como concateno ' . $var . ' números: ' . 3 . 4;
        //$consulta = " insert into Personas(Nombres,Apellidos,Correo, FechaNacimiento) values('" . $nombre . "','" . $apellidos . "','" . $Correo . "','" . $FechaNacimiento . "')";
        $consulta = "update Personas set Nombres='" . $nombre . "', Apellidos='" . $apellidos . "', Correo='" . $Correo . "', FechaNacimiento='" . $FechaNacimiento . "' where ID=" . $ID;
        //$sql = $conexion->query("insert into Personas(Nombres,Apellidos,Correo, FechaNacimiento) values('$nombre','$apellidos','$Correo','$FechaNacimiento') ");
        $sql = $conexion->query($consulta);

        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-success">Error al modificar</div>';
        }

    } else {
        echo '<div class="alert alert-success">Campos Vacios</div> ';

    }

}

?>