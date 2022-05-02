<?php

include("conexion.php");
$con=conectar();

$nom_consultorio=$_POST['nom_consultorio'];
$id_consultorio=$_POST['id_consultorio'];
$id_medico=$_POST['id_medico'];
$n_empleado=$_POST['n_empleado'];
$nom_medico=$_POST['nom_medico'];
$cedula=$_POST['cedula'];
$rfc=$_POST['rfc'];
$servicio=$_POST['servicio'];
$turno=$_POST['turno'];
$h_inicio=$_POST['h_inicio'];
$h_final=$_POST['h_final'];
$t_consulta=$_POST['t_consulta'];
$n_citas=$_POST['n_citas'];
$observaciones=$_POST['observaciones'];

$sql="INSERT INTO medicos VALUES(`$id_medico`, `$n_empleado`, `$nom_medico`, `$cedula`, `$rfc`, `$servicio`, `$turno`, `$h_inicio`, `$h_final`, `$t_consulta`, `$n_citas`, `$observaciones`, `$id_consultorio`, `$nom_consultorio`)";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>