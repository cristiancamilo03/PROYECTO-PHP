<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class AsignacionCarga
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($PidAsignacion,$PidMateria,$PidUsuario,$PidCurso,$PfechaAsignacion)
    {
        $sql = "CALL insertarDatosAsignacionCarga ('$PidAsignacion','$PidMateria','$PidUsuario','$PidCurso','$PfechaAsignacion')";
        return ejecutarConsulta($sql);
    }
    public function editar($PidAsignacion,$PidMateria,$PidUsuario,$PidCurso,$PfechaAsignacion){

        $sql = "CALL ActualizarDatosAsignacionCarga ('$PidAsignacion','$PidMateria','$PidUsuario','$PidCurso','$PfechaAsignacion')";
        return ejecutarConsulta($sql);
    }
}
?>