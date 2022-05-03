<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="UPDATE `medicos` SET `id_medico`='',`n_empleado`='',`nom_medico`='Sin medico asigando',`cedula`='',
`rfc`='',`servicio`='',`turno`='',`h_inicio`='',`h_final`='',`t_consulta`='',`n_citas`='' WHERE id='$id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>
?>