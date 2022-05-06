<?php 
    $unidadmedica=$_GET['unidadmedica'];
    echo $unidadmedica;
    include("conexion.php");
    $con=conectar();
    $sql="SELECT m.id as medico, m.id_medico as id_medico, m.nom_medico as nom_medico, m.rfc as rfc, m.cedula as cedula, m.n_empleado as n_empleado, m.servicio as servicio, 
    m.turno as turno, m.h_inicial as h_inicial,m.h_final as h_final, m.t_consulta as t_consulta, m.n_citas as n_citas,
    m.observaciones as observaciones, m.cargo as cargo,c.id as consultorio, c.id_consultorio as id_consultorio, c.nom_consultorio as nom_consultorio, c.id_unidadmedica as id_unidadmedica
    FROM medico m, consultorio c 
    WHERE m.id_consultorio=c.id AND c.id_unidadmedica = $unidadmedica
    ORDER BY c.id ASC";
    $sql1="SELECT um.id as unidad, um.ct as ct, um.aux as aux, um.nom_unidadmedica as nom_unidadmedica , d.ur as ur, d.nom_delegacion as nom_delegacion  
    FROM unidadmedica um, delegaciones d 
    WHERE um.id_delegacion=d.id ORDER BY um.nom_unidadmedica ASC";
    $sql2="SELECT m.id_consultorio as id_consultorio FROM medico m, consultorio c WHERE m.id_consultorio=c.id and c.id_unidadmedica=$unidadmedica ORDER BY c.id ASC";
    $sql3="SELECT um.ct as ct, um.nom_unidadmedica as nom_unidadmedica, um.aux as aux, d.ur as ur, d.nom_delegacion as nom_delegacion FROM unidadmedica um, delegaciones d 
    WHERE um.id_delegacion=d.id and um.id=$unidadmedica";
    $query=mysqli_query($con,$sql);
    $query1=mysqli_query($con,$sql1);
    $query2=mysqli_query($con,$sql2);
    $query3=mysqli_query($con,$sql3);
    $row2=mysqli_fetch_array($query3);
    $arrayquery2=array();
    while ($row=mysqli_fetch_array($query2)) {
      $arrayquery2[]=$row['id_consultorio'];
    }

    
    $valores = array_count_values($arrayquery2);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <td>
            <?php echo $row2['nom_delegacion']?>
            </td>
          </tr>
        </table>
        <table class="default">
          <tr>
            <th class="columeft">Unidad Médica</th>
          </tr>
          <tr>
            <td><?php echo $row2['nom_unidadmedica']?></td>
          </tr>
        </table>
        <form action="Index.php" method="GET">
            <select name="unidadmedica" id="unidadmedica">
              <?php
              while($row=mysqli_fetch_array($query1)) {
                echo $row['nom_unidadmedica'];
                ?>
                <option name="unidadmedica" value="<?php echo $row['unidad']?>"> <?php echo $row['nom_unidadmedica']?> </option>
                
                <?php
              }
              ?>
            </select>
            <br><br>
            <input type="submit" value="Filtrar">
          </form>
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
            <td class="columright"><?php echo $row2['ur']?></td>
            <th class="columright">C.T.</th>
            <td class="columright"><?php echo $row2['ct']?></td>
            <th class="columright">AUX</th>
            <td class="columright"><?php echo "0".$row2['aux']?></td>
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
            $count=1;
            while($row=mysqli_fetch_array($query)){
              foreach($valores as $key => $val){
                if($key==$row['consultorio']){
                  /*echo $key."<-->".$row['consultorio']."valor-->".$val;*/
                  if ($val == 1) {
                ?>
                    <tr>
                    <td class="rowTP"><?php  echo $row['nom_consultorio']?></td>
                    <td class="rowTP"><?php  echo $row['id_consultorio']?></td>
                    <td class="rowTP"><?php  echo $row['nom_medico']?></td>
                    <td class="rowTP"><?php  echo $row['id_medico']?></td>
                    <td class="rowTP"><?php  echo $row['rfc']?></td>
                    <td class="rowTP"><?php  echo $row['cedula']?></td>
                    <td class="rowTP"><?php  echo $row['n_empleado']?></td>
                    <td class="rowTP"><?php  echo $row['servicio']?></td>
                    <td class="rowTP"><?php  echo $row['turno']?></td>
                    <td class="rowTP"><?php  echo $row['h_inicial']?></td>
                    <td class="rowTP"><?php  echo $row['h_final']?></td>
                    <td class="rowTP"><?php  echo $row['t_consulta']." MIN."?></td>
                    <td class="rowTP"><?php  echo $row['n_citas']?></td>
                    <td class="rowTP"><?php  echo $row['observaciones']?></td>
                    <th><a href="actualizar.php?id=<?php echo $row['medico'] ?> & unidadmedica=<?php echo $row['id_unidadmedica']?>" class="btn btn-info">Editar</a></th>
                    <th><a href="delete.php?id=<?php echo $row['medico'] ?> & unidadmedica=<?php echo $row['id_unidadmedica']?>" class="btn btn-danger">Eliminar</a></th> 
                    </tr>
                    <?php  
                    break;    
                  }else{
                   if ($count==1) {
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
                          <td class="rowTP"><?php  echo $row['h_inicial']?></td>
                          <td class="rowTP"><?php  echo $row['h_final']?></td>
                          <td class="rowTP"><?php  echo $row['t_consulta']." MIN."?></td>
                          <td class="rowTP"><?php  echo $row['n_citas']?></td>
                          <td class="rowTP"><?php  echo $row['observaciones']?></td>
                          <th><a href="actualizar.php?id=<?php echo $row['medico']?> & unidadmedica=<?php echo $row['id_unidadmedica']?>" class="btn btn-info">Editar</a></th>
                          <th><a href="delete.php?id=<?php echo $row['medico'] ?> & unidadmedica=<?php echo $row['id_unidadmedica']?>" class="btn btn-danger">Eliminar</a></th> 
                        </tr>
                     <?php
                     $count=2;
                    
                     
                   }else {
                   
                    $count=1;
                     if ($row['cargo'] == "") {
                     
                     ?>
                      <tr>
                        <td class="rowTP"><?php  echo $row['nom_medico']?></td>
                        <td class="rowTP"><?php  echo $row['id_medico']?></td>
                        <td class="rowTP"><?php  echo $row['rfc']?></td>
                        <td class="rowTP"><?php  echo $row['cedula']?></td>
                        <td class="rowTP"><?php  echo $row['n_empleado']?></td>
                        <td class="rowTP"><?php  echo $row['servicio']?></td>
                        <td class="rowTP"><?php  echo $row['turno']?></td>
                        <td class="rowTP"><?php  echo $row['h_inicial']?></td>
                        <td class="rowTP"><?php  echo $row['h_final']?></td>
                        <td class="rowTP"><?php  echo $row['t_consulta']." MIN."?></td>
                        <td class="rowTP"><?php  echo $row['n_citas']?></td>
                        <td class="rowTP"><?php  echo $row['observaciones']?></td>
                        <th><a href="actualizar.php?id=<?php echo $row['medico']?> & unidadmedica=<?php echo $row['id_unidadmedica']?>" class="btn btn-info">Editar</a></th>
                        <th><a href="delete.php?id=<?php echo $row['medico'] ?> & unidadmedica=<?php echo $row['id_unidadmedica']?>" class="btn btn-danger">Eliminar</a></th>  
                      </tr>

                     <?php
                     
                     }else {
                       $cargo=$row['medico'];
                       break;
                     }/* Termina else de verificacion de cargo*/
                   }/* Termina else de fila doble*/
                  }/* Termina else*/
                }else{/* Termina if de verificacion de consultorio*/
                  
                }
              }/* Termina foreach*/
            ?>
            
        
        <?php  
                    
            }/* Termina while*/
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