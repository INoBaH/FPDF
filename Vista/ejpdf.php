<?php
require('../util/fpdf184/fpdf.php');
$texto= $_POST['texto'];
$pdf= new FPDF();
$pdf->AddPage(); 
$pdf->SetTitle('Su ejemplo de conversor de PDF');
$pdf->SetFont('Arial', '',13);
$pdf->Write(5, utf8_decode($texto));
$pdf->Output();	