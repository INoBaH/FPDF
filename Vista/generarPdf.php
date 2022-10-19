
<?php
include_once "../configuracion.php";
$objAbmAuto = new AbmAuto();
$datos = data_submitted(); //Devuelve un array = Array([Patente] => X)
//verEstructura($datos);

$objAuto=NULL;
if (isset($datos['Patente'])){ //Si existe un objeto con Patente, obtengo el objeto Auto con todos sus datos
    $listaAuto = $objAbmAuto->buscar($datos);
    //verEstructura($listaTabla);
    //if (count($listaAuto)==1){
    $objAuto= $listaAuto[0];

 	include('Plantilla1.php');
	//Instaciamos la clase para genrear el documento pdf
	$pdf=new PDF();
	$pdf->AliasNbPages();

	//Agregamos la primera pagina al documento pdf
	//pdf->AddPage('O'); //orientacion horizontal

	$pdf->AddPage(); 
	//$pdf->SetFillColor(200,232,232);
	$pdf->SetTitle('Detalles del auto');
	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',13);
	$pdf->SetTextColor(5,5,5);
	$pdf->Write(5, 'Patente: '.$objAuto->getPatente());
	$pdf->Ln(10);
	$pdf->Write(5, 'Marca: '.$objAuto->getMarca());
	$pdf->Ln(10);
	$pdf->Write(5, 'Modelo: '.$objAuto->getModelo());
	$pdf->Ln(10);
	$pdf->Write(5, utf8_decode('Año: ').$objAuto->getAnio());
	$pdf->Ln(10);
	$pdf->Write(5, 'Km: '.$objAuto->getKm());
	$pdf->Ln(10);
	$pdf->Write(5, 'Observaciones: '.utf8_decode($objAuto->getObservaciones()));
	$pdf->Ln(10);


	$directory='../util/archivos/'.$datos["Patente"].'/';
    $dirint = dir($directory);

    while (($archivo = $dirint->read()) != false){
        if (strpos($archivo,"jpg")){ 
            $foto = $directory.$datos["Patente"].".jpg";
        }
        if (strpos($archivo,"jpeg")){ 
            $foto = $directory.$datos["Patente"].".jpeg";
        }
        if (strpos($archivo,"png")){ 
            $foto = $directory.$datos["Patente"].".png";
        }

    }

    //$pdf->Image($foto, 40, 140, 130, 90);
    $pdf->ClippingRoundedRect(40,150,130,80,5,true);
	$pdf->Image($foto,40,140,130,90);
	$pdf->UnsetClipping();
	$pdf->Output();		
}

?>