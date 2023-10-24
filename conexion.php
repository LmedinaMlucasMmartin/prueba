<?php

function conexion(){
    $host = "localhost"; //servidor local
    $user = "root"; //usuarios
    $pass = ""; //contraseña 

    $bd = "institucion"; //nombred de la base de datos 

    $connect=mysqli_connect($host, $user, $pass);//ejecuta 

    mysqli_select_db($connect, $bd);//boton que envia 

    return $connect;//

}


?>