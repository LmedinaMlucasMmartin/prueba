<?php 
    include("../conexion.php");
    $con=conexion();

    $id=$_GET['id'];

    $sql="SELECT * FROM alumnos WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Editar clientes</title>
        
    </head>
    <body>
        <div>
            <form action="editar.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="apellidoynombre"  value="<?= $row['apellidoynombre']?>">
                <input type="number" name="dni" value="<?= $row['dni']?>">
                <input type="number" name="edad" value="<?= $row['edad']?>">
                
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>