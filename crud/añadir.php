<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
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
                <div class="container mt-5">
                    <form action="insert.php" method="POST">
                                <input type="text" class="form-control mb-3" name="nom_consultorio" placeholder="N° de Consultorio" require>
                                <input type="text" class="form-control mb-3" name="id_consultorio" placeholder="ID Consultorio" require>
                                <input type="text" class="form-control mb-3" name="nom_medico" placeholder="Nombre del Médico" require>
                                <input type="text" class="form-control mb-3" name="id_medico" placeholder="ID Médico" require>
                                <input type="text" class="form-control mb-3" name="rfc" placeholder="R.F.C." require>
                                <input type="text" class="form-control mb-3" name="cedula" placeholder="Cédula Profesional" require>
                                <input type="text" class="form-control mb-3" name="n_empleado" placeholder="Nº Empleado" require>
                                <input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio" require>
                                <input type="text" class="form-control mb-3" name="turno" placeholder="Turno" require>
                                <input type="text" class="form-control mb-3" name="h_inicio" placeholder="Horario Inicio" require>
                                <input type="text" class="form-control mb-3" name="h_final" placeholder="Horario Final" require>
                                <input type="text" class="form-control mb-3" name="t_consulta" placeholder="Tiempo de consulta" require>
                                <input type="text" class="form-control mb-3" name="n_citas" placeholder="Número de citas" require>
                                <input type="text" class="form-control mb-3" name="observaciones" placeholder="Colonias Adscritas (Observaciones)" require>
                                
                                <input type="submit" class="btn btn-primary">
                    </form>
                    
                </div>
    </body>
</html>