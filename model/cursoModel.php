<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Curso
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($PidCurso,$PnombreCurso)
    {
        $sql="CALL insertarCurso ('$PidCurso','$PnombreCurso')";  
        return ejecutarConsulta($sql);
    }
    public function editar($PidCurso,$PnombreCurso)
    {
        $sql="CALL ActualizarCurso ('$PidCurso','$PnombreCurso')";  
        return ejecutarConsulta($sql);
    }
    
    public function eliminar($PidCurso)
    {
        $sql="CALL EliminarCurso ('$PidCurso')";  
        return ejecutarConsulta($sql);

    }
    public function Consultar($PidCurso)
    {
        $sql="CALL consultarCurso ('$PidCurso')";  
        return ejecutarConsulta($sql);

    }
}
?>