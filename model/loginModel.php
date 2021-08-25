<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Login
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function Validar($usuario,$contraseñaUsuario,$tipoUsuario)
    {
        $sql="SELECT * FROM USUARIOS WHERE usuario = '$usuario' and contraseñaUsuario = '$contraseñaUsuario' and idTipoUsuario = '$tipoUsuario' and estadoUsuario = 'Activo'";
        return ejecutarConsulta($sql);  

    }
}
?>
