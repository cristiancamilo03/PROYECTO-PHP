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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" type="image/ico" href="../assets/icons/JPL.ico" />
    <script src="https://kit.fontawesome.com/11509ce6e2.js"></script>
    <title>Galeria</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/galeria.css" />
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
                        <a class="nav-link" href="menu.php">Menu <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modulos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=".\calificaciones.php">Calificaciones</a>
                            <a class="dropdown-item" href=".\curso.php">Curso</a>
                            <a class="dropdown-item" href=".\materia.php">Materia</a>
                            <a class="dropdown-item" href=".\observacion.php">Observacion</a>
                            <a class="dropdown-item" href=".\inasistencias.php">Inasistencia</a>
                            <a class="dropdown-item" href=".\especialidad.php">Especialidad</a>
                            <a class="dropdown-item" href=".\cargo.php">Cargo</a>
                            <a class="dropdown-item" href=".\boletin.php">Boletin</a>
                            <a class="dropdown-item" href=".\asignacioncarga.php">Asignacion Carga</a>
                            <a class="dropdown-item" href=".\seguimientocurso.php">Seguimiento Curso</a>
                            <a class="dropdown-item" href=".\salon.php">Salon</a>
                            </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./conocenos1.php">Conocenos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://scholar.google.es/schhp?hl=es" target="_blank">Tareas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./clases.php">Clase Virtual</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown  nav-item active float-xs-right">
                        <a class="nav-link" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-windows" aria-hidden="true"></i>
                            Hola!
                            <?php echo  ' ' .strtoupper($_SESSION[ 'username']); ?></a>
                        <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                            <a class="dropdown-item" href="../controller/logoutController.php"><i class="btn btn-danger btn-sm fa fa-window-close-o">
                                </i> Cerrar Sesión</a>
                            <a class="dropdown-item" href="usuarios.php"><i
                                    class="btn btn-primary btn-sm fa fa-address-book"></i> Usuarios</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <form class="formulario">
        <h1>Galeria</h1>
        <div class="contenido">
            <div class="galeria">
                <input type="radio" name="navegacion" id="_1" checked>
                <input type="radio" name="navegacion" id="_2">
                <input type="radio" name="navegacion" id="_3">
                <input type="radio" name="navegacion" id="_4">
                <input type="radio" name="navegacion" id="_5">
                <input type="radio" name="navegacion" id="_6">
                <input type="radio" name="navegacion" id="_7">
                <input type="radio" name="navegacion" id="_8">
                <input type="radio" name="navegacion" id="_9">
                <input type="radio" name="navegacion" id="_10">
                <img src="https://www.redacademica.edu.co/sites/default/files/102d389e3f40a72e5e3cddb9fe3bdfb5_0.jpg"
                    width="260" height="300" alt="Galeria CSS 1" />
                <img src="https://www.educacionbogota.edu.co/portal_institucional/sites/default/files/2019-06/N1_264.jpg"
                    width="260" height="300" alt="Galeria CSS 2" />
                <img src="https://i.ytimg.com/vi/JGUfDX3yQSw/maxresdefault.jpg" width="260" height="300"
                    alt="Galeria CSS 3" />
                <img src="https://1.bp.blogspot.com/-3u5PXOgjufw/UZtxw9DuCXI/AAAAAAAAABo/3XL3BlU_KXU/s1600/Colegio+Tecnico+Jaime+Pardo+Leal.jpg"
                    width="260" height="300" alt="Galeria CSS 4" />
                <img src="https://pbs.twimg.com/profile_images/2301443163/oz8z8hr3n3nh48hnxl3o.jpeg" width="260"
                    height="300" alt="Galeria CSS 5" />
                <img src="https://pbs.twimg.com/media/Cbli6TyVAAAtKnp.jpg" width="260" height="300"
                    alt="Galeria CSS 6" />
                <img src="https://i.ytimg.com/vi/IqJrSjKbkHA/hqdefault.jpg" width="260" height="300"
                    alt="Galeria CSS 7" />
                <img src="https://2.bp.blogspot.com/-50hrEht-Skk/VlW_JQja2dI/AAAAAAAAAW8/antAApYKcjU/s1600/IMG-20150924-WA0076.jpg"
                    width="260" height="300" alt="Galeria CSS 8" />
                <img src="https://userscontent2.emaze.com/images/28a03bf0-5a8c-4c0a-8b54-474e35b907df/b9dd07627cede0df03e66290cacabbd6.jpg"
                    width="260" height="300" alt="Galeria CSS 9" />
                <img src="https://cdn.slidesharecdn.com/ss_thumbnails/presentacinproyectopedagogico-151125132220-lva1-app6891-thumbnail-4.jpg?cb=1448457780"
                    width="260" height="300" alt="Galeria CSS 10" />
            </div>
        </div>
    </form>
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