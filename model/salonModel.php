<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Salon
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($idSalon,$nombreSalon,$ubicacionSalon)
    {
        $sql="INSERT INTO SALON (idSalon,nombreSalon,ubicacionSalon) VALUES ('$idSalon','$nombreSalon','$ubicacionSalon')";
        //return ejecutarConsulta($sql);
        ejecutarConsulta($sql);
        $z=ejecutarConsulta_retornarID($sql);
        $num_elementos=0;
        $sw=true;
        return $sw;

    }
}
?>