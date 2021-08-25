<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Cargo
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($idCargo,$nombreCargo)
    {
        $sql="INSERT INTO CARGO (idCargo,nombreCargo) VALUES ('$idCargo','$nombreCargo')";
        //return ejecutarConsulta($sql);
        ejecutarConsulta($sql);
        $z=ejecutarConsulta_retornarID($sql);
        $num_elementos=0;
        $sw=true;
        return $sw;

    }
    public function editar($idCargo,$nombreCargo)
    {
        $sql="UPDATE CARGO SET nombreCargo ='$nombreCargo' WHERE idCargo='$idCargo'";
        return ejecutarConsulta($sql);
    }
    public function eliminar($idCargo){
        
        $sql="DELETE FROM CARGO WHERE idCargo ='$idCargo'";
        return ejecutarConsulta($sql);

    }
}
?>