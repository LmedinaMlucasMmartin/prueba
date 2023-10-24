<?php

include("../conexion.php");
$con = conexion();

$id=$_POST["id"];
$apellidoynombre = $_POST['apellidoynombre'];
$dni = $_POST['dni'];
$edad = $_POST ['edad'];

$sql="UPDATE alumnos SET apellidoynombre='$apellidoynombre', dni='$dni', edad='$edad' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
   echo "modificado";
}else{

}

?>