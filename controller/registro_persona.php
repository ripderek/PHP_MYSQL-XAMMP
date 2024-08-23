<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["Correo"]) and !empty($_POST["FechaNacimiento"])) {
        $nombre = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $FechaNacimiento = $_POST["FechaNacimiento"];
        $Correo = $_POST["Correo"];

        //$resultado = $var1 . ' observa como concateno ' . $var . ' números: ' . 3 . 4;
        $consulta = " insert into Personas(Nombres,Apellidos,Correo, FechaNacimiento) values('" . $nombre . "','" . $apellidos . "','" . $Correo . "','" . $FechaNacimiento . "')";
        //$sql = $conexion->query("insert into Personas(Nombres,Apellidos,Correo, FechaNacimiento) values('$nombre','$apellidos','$Correo','$FechaNacimiento') ");
        $sql = $conexion->query($consulta);

        if ($sql == 1) {
            echo '<div class="alert alert-success"> Se realizo el registro</div>';
        } else {
            echo '<div class="alert alert-success">Error al registrar</div>';
        }

    } else {
        echo '<div class="alert alert-success">Campos Vacios</div> ';

    }

}

?>
<script>
    history.replaceState(null, null, location.pathname)
</script>