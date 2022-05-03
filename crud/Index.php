<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM medicos";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Crud</title>
</head>


<body>
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
    <section id="left1">
      <div>
        <table class="default">
          <tr>
            <th class="columeft">Delegacion</th>
          </tr>
          <tr>
            <td>Hidalgo</td>
          </tr>
        </table>
        <table class="default">
          <tr>
            <th class="columeft">Unidad Médica</th>
          </tr>
          <tr>
            <td>CMF. MIXQUIAHUALA</td>
          </tr>
        </table>
      </div>
    </section>
    <aside id="right1">
      <div id="subtitulo">
        CARGA INICIAL DE LA INFRAESTRUCTURA DE LA UNIDAD MÉDICA
      </div>
      <div id="tablaC"> 
        <table class="default">
          <tr>
            <th class="columright">Claves</th>
            <th class="columright">U.R.</th>
            <td class="columright">13</td>
            <th class="columright">C.T.</th>
            <td class="columright">208</td>
            <th class="columright">AUX</th>
            <td class="columright">00</td>
          </tr>
        </table>
      </div>
      <div id="fecha">
        <table class="default">
          <tr>
            <th class="columrightF">Fecha de Elaboración:</th>
            <td class="columrightF">02/02/2022</td>
          </tr>
        </table>
      </div>
    </aside>

    <div class="clear"></div>
    <section id="principal"> 
      <table class="default">
          <thead>

        <tr>
          <th class="columP">N° de Consultorio</th>
          <th class="columP">ID Consultorio</th>
          <th class="columP">Nombre del Médico</th>
          <th class="columP">ID Médico</th>
          <th class="columP">R.F.C.</th>
          <th class="columP">Cédula Profesional</th>
          <th class="columP">Nº Empleado</th>
          <th class="columP">Servicio</th>
          <th class="columP">Turno</th>
          <th class="columP">Horario Inicio</th>
          <th class="columP">Horario Final</th>
          <th class="columP">Tiempo de consulta</th>
          <th class="columP">Número de citas</th>
          <th class="columP">Colonias Adscritas (Observaciones)</th>
          <th class="columP"></th>
          <th class="columP"></th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($row=mysqli_fetch_array($query)){
                $temp=$row['id'];
                if (($temp % 2) != 0 ) {
                ?>
                <tr>
                    <td rowspan="2" class="rowTP"><?php  echo $row['nom_consultorio']?></td>
                    <td rowspan="2" class="rowTP"><?php  echo $row['id_consultorio']?></td>
                    <td class="rowTP"><?php  echo $row['nom_medico']?></td>
                    <td class="rowTP"><?php  echo $row['id_medico']?></td>
                    <td class="rowTP"><?php  echo $row['rfc']?></td>
                    <td class="rowTP"><?php  echo $row['cedula']?></td>
                    <td class="rowTP"><?php  echo $row['n_empleado']?></td>
                    <td class="rowTP"><?php  echo $row['servicio']?></td>
                    <td class="rowTP"><?php  echo $row['turno']?></td>
                    <td class="rowTP"><?php  echo $row['h_inicio']?></td>
                    <td class="rowTP"><?php  echo $row['h_final']?></td>
                    <td class="rowTP"><?php  echo $row['t_consulta']." MIN."?></td>
                    <td class="rowTP"><?php  echo $row['n_citas']?></td>
                    <td rowspan="2" class="rowTP"><?php  echo $row['observaciones']?></td>
                    <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                    <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th> 
                </tr>
            <?php
                }else{

            ?>
            <tr>
                <td class="rowTP"><?php  echo $row['nom_medico']?></td>
                <td class="rowTP"><?php  echo $row['id_medico']?></td>
                <td class="rowTP"><?php  echo $row['rfc']?></td>
                <td class="rowTP"><?php  echo $row['cedula']?></td>
                <td class="rowTP"><?php  echo $row['n_empleado']?></td>
                <td class="rowTP"><?php  echo $row['servicio']?></td>
                <td class="rowTP"><?php  echo $row['turno']?></td>
                <td class="rowTP"><?php  echo $row['h_inicio']?></td>
                <td class="rowTP"><?php  echo $row['h_final']?></td>
                <td class="rowTP"><?php  echo $row['t_consulta']." MIN."?></td>
                <td class="rowTP"><?php  echo $row['n_citas']?></td> 
                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>  
            </tr>
        
        <?php  
                }      
            }
        ?>
        
        </tbody>
      </table>
    </section>
    <section id="botones">
        <div>
            <a href="añadir.php" class="btn btn-primary">Añadir fila</a>
        </div>
        
    </section>
</body>
</html>