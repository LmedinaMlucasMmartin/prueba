<?php

include("../conexion.php");
$con = conexion();

$id=$_GET["id"];

$sql="DELETE FROM alumnos WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
   echo "borrado";
}else{
    echo "error";
}

?>