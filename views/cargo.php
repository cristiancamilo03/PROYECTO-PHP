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
    <title>Cargo</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/Modulos.css" />
    <script src="https://kit.fontawesome.com/11509ce6e2.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
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
                <li class="nav-item active">
                    <a class="nav-link" href=".\conocenos1.php">Conocenos</a>
                </li>
                <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modulos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="calificaciones.php">Calificaciones</a>
                            <a class="dropdown-item" href="curso.php">Curso</a>
                            <a class="dropdown-item" href="materia.php">Materia</a>
                            <a class="dropdown-item" href="observacion.php">Observacion</a>
                            <a class="dropdown-item" href="inasistencias.php">Inasistencia</a>
                            <a class="dropdown-item" href="especialidad.php">Especialidad</a>
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
                    <a class="nav-link" href=".\tipousuario.php">Tipo Usuario<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"></a>
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
    <h1><strong>CARGO</h1></strong></h1>
    <div class="intento">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTADO DE CARGO </li>
        </ol>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <div class="col-lg-12">
                    <button id="btnNuevo" type="button" class="nav-link active" data-toggle="modal"><i
                            class="fa fa-user btn btn-outline-info btn-sm"></i>&nbsp;Nuevo Cargo</button>
                </div>
            </li>
            <li class="nav-item">
                <div class="col-lg-12">
                    <button id="btnEliminar" type="button" class="nav-link active" data-target="#cargoEliminar"
                        data-toggle="modal"><i class="far fa-trash-alt btn btn-outline-info btn-sm"></i>&nbsp;Eliminar
                        Cargo</button>
                </div>
            </li>
        </ul>
        </br>
        <center>
            <div class="col-md-8">
                <table class="table table-bordered" id="tablaCargo">
                    <thead class="bg-primary">
                        <tr>
                            <td class="idTipoUsuario" align="center"><strong>Codigo Cargo</strong></td>
                            <td class="nomTipoUsuario" align="center"><strong>Nombre Cargo</strong></td>
                            <td class="acciones" align="center"><strong>Acciones</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $query = $conn -> query ("SELECT * FROM CARGO Order by idCargo ASC");
                        while ($valores = mysqli_fetch_object($query)) {
                            ?>
                        <tr>
                            <td><?php echo $valores->idCargo; ?></td>
                            <td><?php echo $valores->nombreCargo; ?></td>
                            <td>

                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </center>
    </div>
    <!--Modal para CRUD-->
    <div class="modal fade" id="cargoCrud" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formCrear" method="POST" action="../controller/cargoController.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="CodCargo" class="col-sm-2 control-label"><strong>Codigo Cargo</strong></label>
                            <input type="text" id="CodCargo" name="CodCargo" placeholder="Ingrese el Codigo del Cargo"
                                required pattern="[0-9]+" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomCargo" class="col-sm-2 control-label"><strong>Nombre Cargo</strong></label>
                        <input type="text" id="nomCargo" name="nomCargo" placeholder="Ingrese el nombre del Cargo" />
                    </div>

                    <div class="modal-footer">
                        <center>
                            <input class="btn btn-outline-info my-2 my-sm-0" type="submit" name="btnCrud" value="Crear"
                                text="button">
                            <input class="btn btn-outline-info my-2 my-sm-0" type="submit" name="btnCrud"
                                value="Modificar" text="button">
                            <button type="button" class="btn btn-outline-info my-2 my-sm-0"
                                data-dismiss="modal">Cancelar</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Modal para Eliminar-->
    <div class="modal fade" id="crudEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formEliminar" method="POST" action="../controller/cargoController.php">
                    <div>
                        <div class="form-group">
                            <label for="CodCargo" class="col-sm-2 control-label"><strong>Codigo Cargo</strong></label>
                            <input type="text" id="CodCargo" name="CodCargo"
                                placeholder="Ingrese el Codigo del Tipo de Usuario" required pattern="[0-9]+" />
                        </div>
                    </div>
                    </br>
                    <div class="modal-footer">
                        <center>
                            <input class='btn btn-danger' type='submit' name='btnCrud' value='Eliminar' text='button'>
                            <button type="button" class="btn btn-outline-info my-2 my-sm-0"
                                data-dismiss="modal">Cancelar</button>
                        </center>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="intento">
        <footer>
            <center>
                <small><i>Copyright&copy; Sistema creado por Cristian Alarcón & Hector Florez - Todos
                        los
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
    <script type="text/javascript" src="./script/cargo.js"></script>
</body>

</html>