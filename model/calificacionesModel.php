<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Calificacion
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($PidCalificacion,$PnotaPeriodo1,$PnotaPeriodo2,$PnotaPeriodo3,$PnotaFinal,$PfechaRegistro,$PidAsignacion,$PidCurso,$PestadoCalificacion)
    {
        $sql="CALL insertarCalificacion ('$PidCalificacion','$PnotaPeriodo1','$PnotaPeriodo2','$PnotaPeriodo3','$PnotaFinal','$PfechaRegistro','$PidAsignacion','$PidCurso','$PestadoCalificacion')";  
        return ejecutarConsulta($sql);
    }
    public function editar($PidCalificacion,$PnotaPeriodo1,$PnotaPeriodo2,$PnotaPeriodo3,$PnotaFinal,$PfechaRegistro,$PidAsignacion,$PidCurso,$PestadoCalificacion)
    {
        $sql="CALL ActualizarCalificacion ('$PidCalificacion','$PnotaPeriodo1','$PnotaPeriodo2','$PnotaPeriodo3','$PnotaFinal','$PfechaRegistro','$PidAsignacion','$PidCurso','$PestadoCalificacion')";  
        return ejecutarConsulta($sql);
    }
    
    public function inactivar($PidCalificacion)
    {
        $sql="CALL CambioEstadoCalificacion ('$PidCalificacion')";  
        return ejecutarConsulta($sql);

    }
    public function activar($PidCalificacion)
    {
        $sql="CALL CambioEstadoCalificacionActivo ('$PidCalificacion')";  
        return ejecutarConsulta($sql);

    }
}
?>