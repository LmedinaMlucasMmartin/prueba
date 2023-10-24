<?php
include("../conexion.php");
$con = conexion();

$id = null;
$apellidoynombre = $_POST['apellidoynombre'];
$dni = $_POST['dni'];
$edad = $_POST ['edad'];

$sql = "INSERT INTO alumnos VALUES('$id','$apellidoynombre','$dni','$edad')";
$query = mysqli_query($con, $sql);

if($query){
    echo "se agrego correctamente";
}else{
    echo "error";
}

?>