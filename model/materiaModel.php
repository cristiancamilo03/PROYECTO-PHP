<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Materia
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($idMateria,$nombreMateria,$horasSemanales)
    {
        $sql="INSERT INTO MATERIA (idMateria,nombreMateria,horasSemanales) VALUES ('$idMateria','$nombreMateria','$horasSemanales')";
        return ejecutarConsulta($sql);

    }
    public function editar($idMateria,$nombreMateria,$horasSemanales)
    {
        $sql="UPDATE MATERIA SET nombreMateria='$nombreMateria', horasSemanales='$horasSemanales' WHERE idMateria='$idMateria'";
        return ejecutarConsulta($sql);
    }
}
?>