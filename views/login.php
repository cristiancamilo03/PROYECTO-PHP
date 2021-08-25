<?php
    include '../config/conexion.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <link rel="shortcut icon" type="image/ico" href="../assets/icons/JPL.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://kit.fontawesome.com/11509ce6e2.js"></script>
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/Login.css" />
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
    <form class="formulario" method="POST" action="../controller/loginController.php">
        <h1>Inicio de Sesión</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Ingrese usuario" name="Usuario" required pattern="[a-zA-Z0-9]+"
                    minlength="5" maxlength="50" />
            </div>
            <div class="input-contenedor">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Ingrese contraseña" id="password" name="password" required
                    pattern="[A-Za-z0-9]{8,50}+" minlength="8" maxlength="50" />
                <span class="eye" onclick="myFunction()">
                    <i id="hide1" class="fa fa-eye"></i>
                    <i id="hide2" class="fa fa-eye-slash" id="icono"></i>
                </span>
            </div>
            <div class="mb-3">
                <div class="input-group is-invalid">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="validatedInputGroupSelect">Tipo Usuario</label>
                    </div>
                    <select class="custom-select" id="validatedInputGroupSelect" name="tipo_usu" required>
                        <option value="">--Seleccione tipo de Usuario--</option>
                        <?php
                        $query = $conn -> query ("SELECT * FROM TIPOUSUARIO ");
                        while ($valores = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $valores['idTipoUsuario'] ?>"><?php echo $valores[1]?></option>
                        <?php } ?>
                    </select>
                </div>
                </br>
                <center>
                    <input class="btn btn-outline-info my-2 my-sm-0" type="submit" name="btnIniciar" value="Iniciar Sesion"
                        text="Button">
                </center>
                <p>Para poder iniciar sesion debes estar previamente registrado.<br />
                    Contacta un administrador si tienes problemas.</P>
            </div>
            <center>
                <a class="btn btn-outline-info my-2 my-sm-0" href="http://localhost/JPL_ACADEMICO">Volver a la Pagina
                    de
                    Inicio</a>
            </center>
    </form>
    <script src="./script/showPassword.js"></script>
</body>

</html>