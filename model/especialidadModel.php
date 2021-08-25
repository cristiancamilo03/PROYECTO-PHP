<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Especialidad
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($idEspecialidad,$nombreEspecialidad)
    {
        $sql="INSERT INTO ESPECIALIDAD (idEspecialidad,nombreEspecialidad) VALUES ('$idEspecialidad','$nombreEspecialidad')";
        //return ejecutarConsulta($sql);
        ejecutarConsulta($sql);
        $z=ejecutarConsulta_retornarID($sql);
        $num_elementos=0;
        $sw=true;
        return $sw;

    }
}
?>