<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="unidadmedicatest";
    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
   return $con;
}
?>