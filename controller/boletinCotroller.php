<?php 
session_start();
require_once "../model/boletinModel.php";

$Boletin = new Boletin();

$codBoletin=isset($_POST["CodBoletin"])? limpiarCadena($_POST["CodBoletin"]):"";
$codUsuario=isset($_POST["CodUsu"])? limpiarCadena($_POST["CodUsu"]):"";
$codCalificacion=isset($_POST["codCal"])? limpiarCadena($_POST["codCal"]):"";
$codMateria=isset($_POST["codMateria"])? limpiarCadena($_POST["codMateria"]):"";
$estadoBoletin=isset($_POST["estBoletin"])? limpiarCadena($_POST["estBoletin"]):"";


switch ($_POST['btnCrud']) {
    case 'Crear':
        $rspta=$Boletin->insertar($codBoletin,$codUsuario,$codCalificacion,$codMateria,$estadoBoletin);
        echo $rspta ? "<script> alert ('Datos registrados correctamente');
        location.href = '../views/boletin.php';
        </script>" : "No se pudo registrar todos los datos del usuario";
    break;
    case 'Modificar':
        $rspta=$Boletin->editar($codBoletin,$codUsuario,$codCalificacion,$codMateria,$estadoBoletin);
        echo $rspta ? "<script> alert ('Datos actualizados correctamente');
        location.href = '../views/boletin.php';
        </script>" : "No se pudo actualizar los datos";
    break;
    case 'Inactivar':
        $rspta=$Boletin->inactivar($codBoletin);
        echo $rspta ? "<script> alert ('Usuario Inactivado Correctamente ');
        location.href = '../views/boletin.php';
        </script>" : "No se pudo inactivar el usuario";
break;
}

?>