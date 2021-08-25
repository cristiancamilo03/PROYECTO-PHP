<?php
include '../config/Conexion.php';
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    echo'<script type="text/javascript">
    alert("!ERROR 404! \n La pagina a la cual intenta acceder no se encuentra o debe haber iniciado sesion previamente");
    window.location.href="./Error_404.php";
    </script>';
}else{

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <link rel="shortcut icon" type="image/ico" href="../assets/icons/JPL.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Calificaciones</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/Modulos.css" />
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <script src="https://kit.fontawesome.com/11509ce6e2.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <div id="main-page" class="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand logo puntero"
                style="background-repeat: no-repeat; width: auto; height: 50px; padding-left: 80px; background-image: url(&quot;https://s3.amazonaws.com/archivos.vpsnotas.com/Escudos/JPL.png&quot;);">
                <span class="navbar-brand">COLEGIO JAIME PARDO LEAL I.E.D.</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href=".\menu.php">Menu <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modulos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="curso.php">Curso</a>
                            <a class="dropdown-item" href="materia.php">Materia</a>
                            <a class="dropdown-item" href="observacion.php">Observacion</a>
                            <a class="dropdown-item" href="inasistencias.php">Inasistencia</a>
                            <a class="dropdown-item" href="especialidad.php">Especialidad</a>
                            <a class="dropdown-item" href="cargo.php">Cargo</a>
                            <a class="dropdown-item" href="boletin.php">Boletin</a>
                            <a class="dropdown-item" href="asignacioncarga.php">Asignacion Carga</a>
                            <a class="dropdown-item" href="seguimientocurso.php">Seguimiento Curso</a>
                            <a class="dropdown-item" href="salon.php">Salon</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="tipousuario.php">Tipo Usuario</a>
                            <a class="dropdown-item" href="usuarios.php">Usuario</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href=".\conocenos1.php">Conocenos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://scholar.google.es/schhp?hl=es" target="_blank">Tareas</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown  nav-item active float-xs-right">
                        <a class="nav-link" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-windows" aria-hidden="true"></i>
                            Hola!
                            <?php echo  ' ' .strtoupper($_SESSION[ 'username']); ?></a>
                        <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                            <a class="dropdown-item" href="../controller/logoutController.php"><i
                                    class="btn btn-danger btn-sm fa fa-window-close-o">
                                </i> Cerrar Sesión</a>
                            <a class="dropdown-item" href="usuarios.php"><i
                                    class="btn btn-primary btn-sm fa fa-address-book"></i> Usuarios</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <h1><strong>CALIFICACIONES</strong></h1>
    <div class="intento">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTADO DE CALIFICACIONES </li>
        </ol>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <div class="col-lg-12">
                    <button id="btnNuevo" type="button" class="nav-link active" data-toggle="modal"><i
                            class="fa fa-user btn btn-outline-info btn-sm"></i>&nbsp;Nueva Calificacion</button>
                </div>
            </li>
            <li class="nav-item">
                <div class="col-lg-12">
                    <button id="btnInactivar" type="button" class="nav-link active" data-toggle="modal"><i
                            class="far fa-trash-alt btn btn-outline-info btn-sm"></i>&nbsp;Inactivar
                        Calificacion</button>
                </div>
            </li>
            <li class="nav-item">
                <div class="col-lg-12">
                    <button id="btnActivar" type="button" class="nav-link active" data-toggle="modal"><i
                            class="far fa-trash-alt btn btn-outline-info btn-sm"></i>&nbsp;Activar
                        Calificacion</button>
                </div>
            </li>
            <li class="nav-item">
                <div class="col-lg-12">
                    <button id="btnGenerar" type="button" class="nav-link active" data-target="#calificaciones"
                        data-toggle="modal"><a href="../include/Export/reporteCalificacion.php">
                            <i class="far fa-file-pdf btn btn-outline-info btn-sm"></i></a>&nbsp;Generar
                        Reporte</button>
                </div>
            </li>
        </ul>

        </br>
        <center>
            <div class="col-md-18">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableCalificacion">
                        <thead class="bg-primary">
                            <tr>
                                <td class="idCalificacion" align="center"><strong>Codigo Calificacion</strong></td>
                                <td class="notaPeriodo1" align="center"><strong>Nota Periodo 1</strong></td>
                                <td class="notaPeriodo2" align="center"><strong>Nota Periodo 2</strong></td>
                                <td class="notaPeriodo3" align="center"><strong>Nota Periodo 3</strong></td>
                                <td class="notaFinal" align="center"><strong>Nota Final</strong></td>
                                <td class="fechaRegistro" align="center"><strong>Fecha Registro</strong></td>
                                <td class="CodAsignacion" align="center"><strong>Codigo Asignacion</strong></td>
                                <td class="idCurso" align="center"><strong>Codigo Curso</strong></td>
                                <td class="estadoCalificacion" align="center"><strong>Estado</strong></td>
                                <td class="acciones" align="center"><strong>Acciones</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $query = $conn -> query ("SELECT * FROM CALIFICACION
                        INNER JOIN ASIGNACIONCARGA ON CALIFICACION.idAsignacion = ASIGNACIONCARGA.idAsignacion
                        INNER JOIN CURSO ON CALIFICACION.idCurso = CURSO.idCurso Order by idCalificacion ASC");
                        while ($valores = mysqli_fetch_object($query)) {
                        ?>
                            <tr>
                                <td><?php echo $valores->idCalificacion; ?></td>
                                <td><?php echo $valores->notaPeriodo1; ?></td>
                                <td><?php echo $valores->notaPeriodo2; ?></td>
                                <td><?php echo $valores->notaPeriodo3; ?></td>
                                <td><?php echo $valores->notaFinal; ?></td>
                                <td><?php echo $valores->fechaRegistro; ?></td>
                                <td><?php echo $valores->fechaAsignacion; ?></td>
                                <td><?php echo $valores->nombreCurso; ?></td>
                                <td><?php echo $valores->estadoCalificacion; ?></td>
                                <td>

                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
    </div>
    <!--Modal para CRUD-->
    <div class="modal fade bd-example-modal-lg" id="calificacionesCrud" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formCrear" method="POST" action="../controller/calificacionesController.php">
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="CodCalificaciones" class="col-sm-2 control-label"><strong>Codigo
                                Calificaciones:</strong></label>
                        <input type="text" id="idCalifi" name="idCalifi" placeholder="Ingrese el Codigo Calificaciones"
                            required="Campo Obligatorio">
                    </div>
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="NotaPeriodo1" class="col-sm-2 control-label"><strong>Nota Periodo
                                1:</strong></label>
                        <input type="text" id="NotaP1" name="NotaP1" required="Campo Obligatorio" />
                    </div>
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="NotaPeriodo2" class="col-sm-2 control-label"><strong>Nota Periodo
                                2:</strong></label>
                        <input type="text" id="NotaP2" name="NotaP2" required="Campo Obligatorio" />
                    </div>
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="NotaPeriodo3" class="col-sm-2 control-label"><strong>Nota Periodo
                                3:</strong></label>
                        <input type="text" id="NotaP3" name="NotaP3" required="Campo Obligatorio" />
                    </div>
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="NotaFinal" class="col-sm-2 control-label"><strong>Nota
                                Final:</strong></label>
                        <input type="text" id="NotaF" name="NotaF" required="Campo Obligatorio" />
                    </div>
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="FechaCalificacion" class="col-sm-2 control-label"><strong>Fecha de
                                Calificacion:</strong></label>
                        <input type="datetime-local" id="FechCal" name="FechCal" required />
                    </div>
                    <div class="form-group">
                        <label for="CodAsignacion" class="col-sm-2 control-label"><strong>Codigo
                                Asignacion</strong></label>
                        <input type="text" id="CodAsig" name="CodAsig" placeholder="Ingrese el Codigo de la Asignacion"
                            required="Campo Obligatorio" />
                    </div>
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="CodCurso" class="col-sm-2 control-label"><strong>Codigo
                                Curso:</strong></label>
                        <input type="text" id="IdCu" name="IdCu" placeholder="Ingrese el Codigo Curso"
                            required="Campo Obligatorio" />
                    </div>
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="estCal" class="col-sm-2 control-label"><strong>Estado Calificacion</strong></label>
                        <input type="text" id="estCal" name="estCal" placeholder="Ingrese el Estado"
                            required="Campo Obligatorio" />
                    </div>
                    <div class="modal-footer">
                        <center>
                            <input class="btn btn-outline-info my-2 my-sm-0" type="submit" name='btnCrud' value="Crear"
                                text="button">
                            <input class="btn btn-outline-info my-2 my-sm-0" type="submit" name='btnCrud'
                                value="Modificar" text="button">
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Modal para CRUD-->
    <div class="modal fade" id="calificacionesInactivar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formInactivar" method="POST" action="../controller/calificacionesController.php">
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="CodCalificaciones" class="col-sm-2 control-label"><strong>Codigo
                                Calificaciones:</strong></label>
                        <input type="text" id="idCalifi" name="idCalifi" placeholder="Ingrese el Codigo Calificaciones"
                            required="Campo Obligatorio">
                    </div>
                    <div class="modal-footer">
                        <center>
                            <input class='btn btn-danger' type='submit' name='btnCrud' value='Inactivar' text='button'>
                            <button type="button" class="btn btn-outline-info my-2 my-sm-0"
                                data-dismiss="modal">Cancelar</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Modal para CRUD-->
    <div class="modal fade" id="calificacionesActivar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formActivar" method="POST" action="../controller/calificacionesController.php">
                    <div class="form-group">
                        <span class="abs-center"></span>
                        <label for="CodCalificaciones" class="col-sm-2 control-label"><strong>Codigo
                                Calificaciones:</strong></label>
                        <input type="text" id="idCalifi" name="idCalifi" placeholder="Ingrese el Codigo Calificaciones"
                            required="Campo Obligatorio">
                    </div>
                    <div class="modal-footer">
                        <input class='btn btn-success' type='submit' name='btnCrud' value='Activar' text='button'>
                        <button type="button" class="btn btn-outline-info my-2 my-sm-0"
                            data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="intento">
        <footer>
            <center>
                <small><i>Copyright&copy; Sistema creado por Cristian Alarcón & Hector Florez -
                        Todos los
                        derechos reservados <?php echo date('Y'); ?> <a href="http://seecorpdesarrollos.esy.es/"
                            target="_blanck">
                            BSC Proyects.</a></i></small>
                <a href="https://www.facebook.com/bcs.proyects.3" target="_blank"><img
                        src="https://images.vexels.com/media/users/3/137253/isolated/preview/90dd9f12fdd1eefb8c8976903944c026-icono-de-facebook-logo-by-vexels.png"
                        target="_blank" height="30" width="25" alt="Botón" /></a>
                <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><img
                        src="https://www.pngkit.com/png/full/10-106814_download-icono-de-gmail-fondo-transparente.png"
                        height="30" width="25" alt="Botón" /></a>
                <a href="https://twitter.com/?lang=ES" target="_blank"><img
                        src="https://image.flaticon.com/icons/png/512/39/39552.png" target="_blank" height="30"
                        width="25" alt="Botón" /></a>
            </center>
        </footer>
    </div>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/popper/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="./script/calificacion.js"></script>
</body>

</html>