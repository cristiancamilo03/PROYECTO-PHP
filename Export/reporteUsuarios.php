<?php
	include './pdf.php';
	require '../../config/Conexion.php';
    
    $query = ("SELECT idBoletin, nombreUsuario, apellidoUsuario, notaFinal, nombreCurso, nombreMateria FROM BOLETIN 
    INNER JOIN CALIFICACION ON BOLETIN.idCalificacion = CALIFICACION.idCalificacion
    INNER JOIN MATERIA ON BOLETIN.idMateria = MATERIA.idMateria
	inner Join CURSO on CURSO.idCurso = CALIFICACION.idCurso
    INNER JOIN USUARIOS ON BOLETIN.idUsuario = USUARIOS.idUsuario Order by idBoletin ASC");
	$resultado = $conn->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
    $pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,6,'CODIGO BOLETIN',1,0,'C',1);
    $pdf->Cell(25,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(25,6,'APELLIDO',1,0,'C',1);
	$pdf->Cell(30,6,'NOTA FINAL',1,0,'C',1);
	$pdf->Cell(30,6,'CURSO',1,0,'C',1);
    $pdf->Cell(25,6,'MATERIA',1,1,'C',1);
    
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(45,6,utf8_decode($row['idBoletin']),1,0,'C');
        $pdf->Cell(25,6,utf8_decode($row['nombreUsuario']),1,0,'C');
        $pdf->Cell(25,6,utf8_decode($row['apellidoUsuario']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['notaFinal']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombreCurso']),1,0,'C');
        $pdf->Cell(25,6,utf8_decode($row['nombreMateria']),1,1,'C');
        

	}
	$pdf->Output('D','ReporteUsuarios.pdf');
?>