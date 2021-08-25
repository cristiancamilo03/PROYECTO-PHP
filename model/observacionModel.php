<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Observacion
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($PidObservacion,$PfechaObservacion,$PtipoFalta,$PdescripcionObservacion,$PidUsuario,$PidSeguimiento,$PdescargoObservacion)
    {
        $sql="CALL insertarObservacion ('$PidObservacion','$PfechaObservacion','$PtipoFalta','$PdescripcionObservacion','$PidUsuario','$PidSeguimiento','$PdescargoObservacion')";  
        return ejecutarConsulta($sql);
    }
    public function editar($PidObservacion,$PfechaObservacion,$PtipoFalta,$PdescripcionObservacion,$PidUsuario,$PidSeguimiento,$PdescargoObservacion)
    {
        $sql="CALL ActualizarObservacion ('$PidObservacion','$PfechaObservacion','$PtipoFalta','$PdescripcionObservacion','$PidUsuario','$PidSeguimiento','$PdescargoObservacion')";  
        return ejecutarConsulta($sql);
    }
    public function Consultar($PidObservacion)
    {
        $sql="CALL consultarObservacion ('$PidObservacion')";  
        return ejecutarConsulta($sql);

    }
}
?>