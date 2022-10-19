
<?php
include_once "../configuracion.php";
$objAbmAuto = new AbmAuto();
//$datos = data_submitted();
//verEstructura($datos);

$objAuto=NULL;

    $listaAuto = $objAbmAuto->buscar($objAuto);
    //verEstructura($listaAuto);

 	include('Plantilla2.php');
	//Instaciamos la clase para genrear el documento pdf
	$pdf=new PDF();
	$pdf->AliasNbPages();

	//Agregamos la primera pagina al documento pdf
	$pdf->AddPage('O'); //orientacion horizontal
	//$pdf->AddPage(); 
	$pdf->SetFillColor(200,232,232);
	$pdf->SetFont('Arial','B',13);
	$pdf->SetTitle('Autos registrados');
	$pdf->Ln(15);


		$pdf->Cell(40,10,'PATENTE',1,0,'C',1);
		$pdf->Cell(70,10,'MARCA',1,0,'C',1);
		$pdf->Cell(70,10,'MODELO',1,0,'C',1);
		$pdf->Cell(40,10,utf8_decode('AÑO'),1,0,'C',1);
		$pdf->Cell(40,10,'KM',1,1,'C',1);
		$pdf->SetFont('Arial','',10);
				    
		foreach ($listaAuto as $objAuto) {
			$pdf->Cell(40,10,utf8_decode($objAuto->getPatente()),1,0,'C');
			$pdf->Cell(70,10,utf8_decode($objAuto->getMarca()),1,0,'C');
			$pdf->Cell(70,10,utf8_decode($objAuto->getModelo()),1,0,'C');
			$pdf->Cell(40,10,utf8_decode($objAuto->getAnio()),1,0,'C');
			$pdf->Cell(40,10,utf8_decode($objAuto->getKm()),1,1,'C');
		}

	$pdf->Output();	
?>