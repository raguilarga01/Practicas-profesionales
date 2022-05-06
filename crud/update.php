<?php

include("conexion.php");
$con=conectar();

$id_medico= $_POST['id_medico'];
$n_empleado= $_POST['n_empleado'];
$nom_medico= $_POST['nom_medico'];
$cedula= $_POST['cedula'];
$rfc= $_POST['rfc'];
$servicio= $_POST['servicio'];
$turno= $_POST['turno'];
$h_inicio= $_POST['h_inicio'];
$h_final= $_POST['h_final'];
$t_consulta= $_POST['t_consulta'];
$n_citas= $_POST['n_citas'];
$observaciones= $_POST['observaciones'];
$id=$_POST['id'];
$unidad=$_POST['unidad'];




$sql="UPDATE `medico` SET `id_medico`='$id_medico',`nom_medico`='$nom_medico',`rfc`='$rfc',`cedula`='$cedula',`n_empleado`='$n_empleado',`servicio`='$servicio',
`turno`='$turno',`h_inicial`='$h_inicio',`h_final`='$h_final',`t_consulta`='$t_consulta',`n_citas`='$n_citas',`observaciones`='$observaciones' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php?unidadmedica=".$unidad);
    }
?>