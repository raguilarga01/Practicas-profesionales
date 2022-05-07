<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="UPDATE `medico` SET `nom_medico`='SIN MÉDICO',`rfc`='',`cedula`='',`n_empleado`='',`observaciones`='INHABILITADO',`n_citas`='0' WHERE id='$id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php?unidadmedica=".$_GET['unidadmedica']);
    }
?>
?>