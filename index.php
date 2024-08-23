<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="http://localhost:80/proyectophp/Assets/css/bootstrap.min.css" />

</head>

<body>
    <div class="container-fluid row mt-2 p-3 ms-1">
        <h3 class="text-center text-primary">CRUD PHP-MYSQL</h3>
        <form class="col-4 p-3 bg-primary-subtle rounded-4" method="POST" id="registroForm">
            <h3 class="text-center text-secondary">Registro</h3>
            <?php
            include "models/conexion.php";
            include "controller/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="Correo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="FechaNacimiento">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Guardar</button>
        </form>
        <div class="col-8 p-4 ">
            <?php
            include "models/conexion.php";
            include "controller/eliminar_persona.php";
            ?>
            <table class=" table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!Recorrer la tabla personas para mostrar los registros>
                        <?php
                        include "models/conexion.php";
                        $sql = $conexion->query("select * from Personas");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td> <?= $datos->ID ?></td>
                                <td> <?= $datos->Nombres ?></td>
                                <td> <?= $datos->Apellidos ?></td>
                                <td> <?= $datos->Correo ?></td>
                                <td> <?= $datos->FechaNacimiento ?></td>
                                <td>
                                    <a href="modificar.php?id=<?= $datos->ID ?>" class="btn btn-small btn-warning">
                                        Editar</a>
                                    <a href="index.php?id=<?= $datos->ID ?>" class="btn btn-small btn-danger"
                                        onclick="return eliminar()"> Eliminar</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>


                </tbody>
            </table>
        </div>
    </div>
    <script>
        function eliminar() {
            var respuesta = confirm("¿Seguro que desea eliminar el registro?")
            return respuesta;
        }
    </script>

    <!Para obtener las fucniones de boostrap>
        <script src="http://localhost:80/proyectophp/Assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>