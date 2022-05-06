<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];


$sql="SELECT m.id as medico, m.id_medico as id_medico, m.nom_medico as nom_medico, m.rfc as rfc, m.cedula as cedula, m.n_empleado as n_empleado, m.servicio as servicio, 
m.turno as turno, m.h_inicial as h_inicial,m.h_final as h_final, m.t_consulta as t_consulta, m.n_citas as n_citas,
m.observaciones as observaciones, m.cargo as cargo,c.id as consultorio, c.id_consultorio as id_consultorio, c.nom_consultorio as nom_consultorio, c.id_unidadmedica as id_unidadmedica
FROM medico m, consultorio c 
WHERE m.id_consultorio=c.id AND m.id=$id";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Actualizar</title>
</head>
<header>
        <div class="container-fluid">
            <div class="row justify-content-center"> 
                <div class="col-sm-3">
                    <img
                    src="https://upload.wikimedia.org/wikipedia/commons/c/c4/ISSSTE_logo.png"
                    alt=""
                    id="logo1_1"
                />
                </div>
                <div class="col-md-3">
                    <h1 id="titulo">
                        Dirección Normativa de Administración y Finanzas Subdirección de
                        Coordinación de Proyectos Jefatura de Servicios de Cómputo
                    </h1>
                </div>
                <div class="col-md-3">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/c/c4/ISSSTE_logo.png"
                        alt=""
                        id="logo1_1"
                    />
                </div>
            </div>
        </div>
    
</header>
                <div class="container mt-5">
                    <h2>Actualizar registro</h2>
                    <form action="update.php" method="POST">
                                <input type="text" class="form-control mb-3" name="nom_consultorio" placeholder="N° de Consultorio" value="<?php echo $row['nom_consultorio']?>" readonly="readonly" >
                                <input type="text" class="form-control mb-3" name="id_consultorio" placeholder="ID Consultorio" value="<?php echo $row['id_consultorio'] ?>"  readonly="readonly">
                                <input type="text" class="form-control mb-3" name="nom_medico" placeholder="Nombre del Médico o Sin medico" value="<?php echo $row['nom_medico'] ?>" >
                                <input type="text" class="form-control mb-3" name="id_medico" placeholder="ID Médico" value="<?php echo $row['id_medico'] ?>">
                                <input type="text" class="form-control mb-3" name="rfc" placeholder="R.F.C." value="<?php echo $row['rfc'] ?>">
                                <input type="text" class="form-control mb-3" name="cedula" placeholder="Cédula Profesional" value="<?php echo $row['cedula'] ?>">
                                <input type="text" class="form-control mb-3" name="n_empleado" placeholder="Nº Empleado" value="<?php echo $row['n_empleado'] ?>" >
                                <input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio" value="<?php echo $row['servicio'] ?>" >
                                <input type="text" class="form-control mb-3" name="turno" placeholder="Turno" value="<?php echo $row['turno'] ?>" >
                                <input type="text" class="form-control mb-3" name="h_inicio" placeholder="Horario Inicio" value="<?php echo $row['h_inicial'] ?>" >
                                <input type="text" class="form-control mb-3" name="h_final" placeholder="Horario Final" value="<?php echo $row['h_final'] ?>" >
                                <input type="text" class="form-control mb-3" name="t_consulta" placeholder="Tiempo de consulta" value="<?php echo $row['t_consulta'] ?>" >
                                <input type="text" class="form-control mb-3" name="n_citas" placeholder="Número de citas" value="<?php echo $row['n_citas'] ?>" >
                                <input type="text" class="form-control mb-3" name="observaciones" placeholder="Colonias Adscritas (Observaciones)" value="<?php echo $row['observaciones'] ?>" readonly="readonly">
                                <input type="hidden" name="id" value="<?php echo $row['medico'] ?>">
                                <input type="hidden" name="unidad" value="<?php echo $_GET['unidadmedica']?>">
                                <?php echo $_GET['unidadmedica'] ?>
                                <?php echo $row['medico'] ?>
                                <input type="submit" class="btn btn-primary" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>