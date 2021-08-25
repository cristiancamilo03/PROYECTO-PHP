<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Boletin
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($codBoletin,$codUsuario,$codCalificacion,$codMateria)
    {
        $sql="INSERT INTO `boletin` (`idBoletin`, `idUsuario`, `idCalificacion`, `idMateria`, `estadoBoletin`) VALUES ('$codBoletin','$idMateria','$idUsuario','$idCurso','$fechaAsignacion')";
        return ejecutarConsulta($sql);;

    }
    public function editar($PidAsignacion,$PidMateria,$PidUsuario,$PidCurso,$PfechaAsignacion){

        $sql = "CALL ActualizarDatosAsignacionCarga ('$PidAsignacion','$PidMateria','$PidUsuario','$PidCurso','$PfechaAsignacion')";
        return ejecutarConsulta($sql);
    }
}
?>