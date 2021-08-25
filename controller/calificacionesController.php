<?php 
session_start();
require_once "../model/calificacionesModel.php";

$Calificacion = new Calificacion();

$codCal=isset($_POST["idCalifi"])? limpiarCadena($_POST["idCalifi"]):"";
$notaPeri1=isset($_POST["NotaP1"])? limpiarCadena($_POST["NotaP1"]):"";
$notaPeri2=isset($_POST["NotaP2"])? limpiarCadena($_POST["NotaP2"]):"";
$notaPeri3=isset($_POST["NotaP3"])? limpiarCadena($_POST["NotaP3"]):"";
$notaFi=isset($_POST["NotaF"])? limpiarCadena($_POST["NotaF"]):"";
$fechaReg=isset($_POST["FechCal"])? limpiarCadena($_POST["FechCal"]):"";
$idAsig=isset($_POST["CodAsig"])? limpiarCadena($_POST["CodAsig"]):"";
$idCur=isset($_POST["IdCu"])? limpiarCadena($_POST["IdCu"]):"";
$estCal=isset($_POST["estCal"])? limpiarCadena($_POST["estCal"]):"";

switch ($_POST['btnCrud']) {
    case 'Crear':
            $rspta=$Calificacion->insertar($codCal,$notaPeri1,$notaPeri2,$notaPeri3,$notaFi,$fechaReg,$idAsig,$idCur,$estCal);
            echo $rspta ? "<script> alert ('Datos registrados correctamente');
            location.href = '../views/calificaciones.php';
            </script>" : "No se pudo registrar la Calificacion";
    break;
    case 'Modificar':
            $rspta=$Calificacion->editar($codCal,$notaPeri1,$notaPeri2,$notaPeri3,$notaFi,$fechaReg,$idAsig,$idCur,$estCal);
            echo $rspta ? "<script> alert ('Datos actualizados correctamente');
            location.href = '../views/calificaciones.php';
            </script>" : "No se pudo actualizar la Calificacion";
    break;
    case 'Inactivar':
            $rspta=$Calificacion->inactivar($codCal);
            echo $rspta ? "<script> alert ('Datos Inactivados Correctamente ');
            location.href = '../views/calificaciones.php';
            </script>" : "No se pudo Inactivar la Calificacion";
    break;
    case 'Activar':
        $rspta=$Calificacion->activar($codCal);
        echo $rspta ? "<script> alert ('Datos Activados Correctamente ');
        location.href = '../views/calificaciones.php';
        </script>" : "No se pudo Activar la Calificacion";
break;
}
?>