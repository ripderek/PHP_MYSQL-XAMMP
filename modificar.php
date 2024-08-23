<?php
include "models/conexion.php";
$id = $_GET["id"];
$consulta = "select * from Personas where ID=" . $id;

$sql = $conexion->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="http://localhost:80/proyectophp/Assets/css/bootstrap.min.css" />
</head>

<body>
    <form class="col-4 p-3 bg-primary-subtle rounded-4 m-auto mt-3 " method="POST" id="registroForm">
        <h3 class="text-center text-secondary">Modificar</h3>
        <input type="hidden" name="ID" value="<?= $_GET["id"] ?>">
        <?php
        include "controller/modificar_persona.php";
        while ($datos = $sql->fetch_object()) {
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres" value="<?= $datos->Nombres ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value="<?= $datos->Apellidos ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="Correo" value="<?= $datos->Correo ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="FechaNacimiento" value="<?= $datos->FechaNacimiento ?>">
            </div>
            <?php
        }
        ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Guardar Cambios</button>
    </form>
    <script src="http://localhost:80/proyectophp/Assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>