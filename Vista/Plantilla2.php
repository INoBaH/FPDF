<?php
require('../util/fpdf184/fpdf.php');
	
class PDF extends FPDF{
		
	function Header(){
		$this->Image('../util/img/logo.png', 5, 5, 25);
		$this->SetFont('Helvetica','BU',20);
		$this->SetTextColor(28, 68, 158);
		$this->Cell(30);
		$this->Cell(180,30, 'LISTADO GENERAL DE AUTOS',0,0,'C');
		$this->Ln(20);
	}
		
	function Footer(){
		$this->SetY(-20);
		$this->SetFont('Arial','I', 12);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		$this->Ln(5);
		$this->Cell(0,10, utf8_decode('Grupo N°3 - Victoria Perez Gonzalez - Patricio Rubio - Sergio Valicenti'),0,0,'C');
	}		
}
?>