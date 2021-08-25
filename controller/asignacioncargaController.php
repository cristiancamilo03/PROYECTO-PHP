<?php 
session_start();
require_once "../model/asignacioncargaModel.php";

$AsignCarga = new AsignacionCarga();

$codAsignacion=isset($_POST["CodAsig"])? limpiarCadena($_POST["CodAsig"]):"";
$codMateria=isset($_POST["CodMat"])? limpiarCadena($_POST["CodMat"]):"";
$codUsuario=isset($_POST["CodUsu"])? limpiarCadena($_POST["CodUsu"]):"";
$codCurso=isset($_POST["codCur"])? limpiarCadena($_POST["codCur"]):"";
$fechaAsignacion=isset($_POST["FechaAsig"])? limpiarCadena($_POST["FechaAsig"]):"";

switch ($_POST['btnCrud']) {
    case 'Crear':
        $rspta=$AsignCarga->insertar($codAsignacion,$codMateria,$codUsuario,$codCurso,$fechaAsignacion);
        echo $rspta ? "<script> alert ('Datos registrados correctamente');
        location.href = '../views/asignacioncarga.php';
        </script>" : "No se pudo registrar todos los datos del usuario";
    break;
    case 'Modificar':
        $rspta=$AsignCarga->editar($codAsignacion,$codMateria,$codUsuario,$codCurso,$fechaAsignacion);
        echo $rspta ? "<script> alert ('Datos actualizados correctamente');
        location.href = '../views/asignacioncarga.php';
        </script>" : "No se pudo actualizar los datos";
    break;
}
?>