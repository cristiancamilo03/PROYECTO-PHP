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
<link rel="shortcut icon" type="image/ico" href="../assets/icons/JPL.ico"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Conocenos</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/Menu.css"/>
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
                        <a class="nav-link" href="./menu.php">Menu</a>
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
                        <a class="nav-link" href="./galeria1.php">Galeria</a>
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

    <div class="contendor">
        <br />
        <form id="form1" runat="server">
            <div class="contenido">
                <h2>Himno del Colegio</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/IqJrSjKbkHA" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <br />
            <div class="contenido">
                <h2>Un poco de Historia</h2>
                <p>Inicialmente se llamó escuela Policarpa, quien fue una heroína de la independencia de Colombia en el
                    proceso libertador, murió fusilada en Bogotá durante la Reconquista Española, como existía otra
                    institución con el mismo nombre se cambió
                    por el de Jaime Pardo Leal, abogado y político colombiano. Nació el 28 de marzo de 1941 en Ubaque
                    (Cundinamarca). Asesinado el 12 de octubre de 1987 en La Mesa, (Cundinamarca). Realizó estudios
                    superiores en la Facultad de Derecho y Ciencias
                    Políticas de la Universidad Nacional de Colombia. Durante esta etapa fue un activo dirigente
                    estudiantil
                    y de la JUCO (Juventud Comunista Colombiana). Fue Juez, magistrado del Tribunal Superior de
                    Cundinamarca
                    y candidato a la Corte Suprema
                    de Justicia. Fundador de la Asociación Nacional de Empleados de la Rama Judicial (ASONAL-Judicial),
                    organización sindical de la que fue su primer presidente</p>
            </div>
            <br />
            <div class="contenido">
                <h2>Ubicación</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12029.330369556792!2d-74.09041178444113!3d4.592830680995256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f98fd4f79242f%3A0x131d52078801c597!2sCedit%20Jaime%20Pardo%20Leal!5e0!3m2!1ses-419!2sco!4v1572825947990!5m2!1ses-419!2sco"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
    </div>
    <br>
    <div class="intento">
        <footer>
            <center>
                <small><i>Copyright&copy; Sistema creado por Cristian Alarcón & Hector Florez - Todos los
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
</body>

</html>