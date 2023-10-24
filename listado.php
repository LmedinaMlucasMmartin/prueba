<?php
include("conexion.php");
$con = conexion();

$sql = "SELECT * FROM alumnos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="listado.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="users-table">
        <h2>clientes registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>apellido y nombre</th>
                    <th>dni</th>
                    <th>edad</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['apellidoynombre'] ?></th>
                        <th><?= $row['dni'] ?></th>
                        <th><?= $row['edad'] ?></th>
                        <th><a href="modificar/update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminar/delete.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>