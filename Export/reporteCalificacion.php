<?php
	include './pdf.php';
	require '../../config/Conexion.php';
    
    $query = ("SELECT * FROM CALIFICACION
    INNER JOIN ASIGNACIONCARGA ON CALIFICACION.idAsignacion = ASIGNACIONCARGA.idAsignacion
    INNER JOIN CURSO ON CALIFICACION.idCurso = CURSO.idCurso Order by idCalificacion ASC");
	$resultado = $conn->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
    $pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(15,6,'CODIGO',1,0,'C',1);
    $pdf->Cell(20,6,'PERIODO 1',1,0,'C',1);
    $pdf->Cell(20,6,'PERIODO 2',1,0,'C',1);
    $pdf->Cell(20,6,'PERIODO 3',1,0,'C',1);
    $pdf->Cell(20,6,'NOTA FINAL',1,0,'C',1);    
    $pdf->Cell(32,6,'FECHA REGISTRO',1,0,'C',1);
    $pdf->Cell(32,6,'ASGNACON',1,0,'C',1);
    $pdf->Cell(15,6,'CURSO',1,1,'C',1);
    
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(15,6,utf8_decode($row['idCalificacion']),1,0,'C');
        $pdf->Cell(20,6,utf8_decode($row['notaPeriodo1']),1,0,'C');
        $pdf->Cell(20,6,utf8_decode($row['notaPeriodo1']),1,0,'C');
        $pdf->Cell(20,6,utf8_decode($row['notaPeriodo1']),1,0,'C');
        $pdf->Cell(20,6,utf8_decode($row['notaFinal']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['fechaRegistro']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['fechaAsignacion']),1,0,'C');
        $pdf->Cell(15,6,utf8_decode($row['nombreCurso']),1,1,'C');
        

	}
	$pdf->Output('D','ReprteCalificacines.pdf');
?>