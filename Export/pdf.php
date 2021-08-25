<?php
	require '../fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
            global $title;

            $this->SetFont('Arial','B',15);
            $this->SetDrawColor(0,80,180);
            $this->SetFillColor(232,232,232);
            $this->SetTextColor(20 ,80,150);
            $this->SetLineWidth(1);
            $this->Cell(198,50,'Colegio Jaime Pardo Leal',1,1,'C',true);
            $this->Cell(198,-60, 'Colegio Tecnico',0,0,'C');
            $this->Ln(-15);


            $this->Image('../../assets/Imagenes/escudoBogota.png', 12, 11, 27 );
			$this->Image('../../assets/Imagenes/escudo.jpg', 176, 11, 30);
			$this->SetFont('Arial','B',15);
			$this->Ln(40);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>