<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejemplo</title>
</head>
<body>
    <header>
                
            <form action="crear.php" method="POST">
                <label for="">apellido y nombre</label>
                <input type="text" name="apellidoynombre" required>
                <br>
                <label for="">dni</label>
                <input type="number" name="dni" required>
                <br>
                <label for="">edad</label>
                <input type="number" name="edad"> 
                <br>
                <input type="submit" value="aceptar"> 
            </form>
                
</body>
</html>