<?php
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
    <title>Clases</title>
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
                    <a class="nav-link" href=".\tipousuario.php">Tipo Usuario<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://scholar.google.es/schhp?hl=es" target="_blank">Tareas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href=".\clases.php">Clase Virtual</a>
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
    <h1><strong>CLASES</strong></h1>
    <div class="contenedor">
        <br />
        <form id="form1" runat="server">
            <div class="intento">
                <a href="https://zoom.us/download" target="_blank"><img src="../assets/Imagenes/zoom.png" height="350"
                        width="250" alt="Botón" align="right" /></a>
                <a href="https://www.google.com/intl/es-419/gmail/about/" target="_blank"><img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Gmail_Icon.svg/1200px-Gmail_Icon.svg.png"
                        height="300" width="250" alt="Botón" align="right" /></a>
                <a href="https://meet.google.com/?authuser=1" target="_blank"><img src="../assets/Imagenes/Meet.png"
                        height="350" width="250" alt="Botón" align="left" /></a>
                <a href="https://classroom.google.com/u/0/h?hl=es" target="_blank"><img
                        src="../assets/Imagenes/maxresdefault.jpg" height="350" width="250" alt="Botón"
                        align="left" /></a>
                <a href="https://login.microsoftonline.com/common/oauth2/authorize?response_type=id_token&client_id=5e3ce6c0-2b1f-4285-8d4b-75ee78787346&redirect_uri=https%3A%2F%2Fteams.microsoft.com%2Fgo&state=ad118dc8-ec6c-4981-82a4-d27ed9a7ff56&client-request-id=c71fa44e-8743-4d2d-b805-246a529a6248&x-client-SKU=Js&x-client-Ver=1.0.9&nonce=e43d8638-d4e6-4d1d-bc59-aa628c523142&domain_hint=&sso_reload=true"
                    target="_blank"><img src="../assets/imagenes/teams.png" height="350" width="250" alt="Botón"
                        align="left" /></a>
                </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            </div>
</body>

</html>