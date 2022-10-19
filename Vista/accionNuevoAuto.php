<?php
include_once '../configuracion.php';
$datos = data_submitted(); 

//verEstructura($datos);

$arrayAuto = ["Patente" => $datos['Patente']]; //Creo un array asociativo 
$objAbmAuto = new AbmAuto(); //Creo el objeto AbmAuto 
$auto = $objAbmAuto->buscar($arrayAuto); //Mando a buscar del objeto AbmAuto
$mensaje1="";
$mensaje2="";


if (count($auto)==1){
    $mensaje1 = "Ya existe la patente ingresada";
}
else{
    if($objAbmAuto->alta($datos)){ 
    	
		if ($_FILES['Archivo']['error'] <= 0){
			
			//Se verifica que el archivo sea una imagen jpg o png
			if (($_FILES['Archivo']['type'] == 'image/jpeg') or 
				($_FILES['Archivo']['type'] == 'image/png')){

				$direccion = '../util/archivos/'.strtoupper($datos["Patente"]).'/';
				mkdir($direccion, 0777);

				$extension = pathinfo($direccion.$_FILES['Archivo']['name'], PATHINFO_EXTENSION);

				copy($_FILES['Archivo']['tmp_name'], $direccion.$_FILES['Archivo']['name']);
				rename($direccion.$_FILES['Archivo']['name'], $direccion.$datos['Patente'].".".$extension);
			}
		}
		$mensaje2 = "La inserción se realizo con éxito";
    }
    else{
        $mensaje1 = "La inserción NO pudo concretarse";
    }
}

?>

<head>
 <title>Librerias</title>
  <link rel="icon" type="image/png" href="../util/imagenes/logo.ico"/>
  <link rel="stylesheet" type="text/css" href="../util/css/bootstrap.min.css">
  <script type="text/javascript" src="../util/js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../util/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../util/sweetalert/sweetalert2.min.css">
  <script type="text/javascript" src="../util/sweetalert/sweetalert2.min.js" ></script>
  <link rel="stylesheet" href="../util/css/estilos.css?v33" type="text/css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">

<!--span class="titulo2"><?php //echo $mensaje;?></span><br-->

<?php
if($mensaje1!=""){
	echo "<script>
        swal({
        	type: 'error',
        	title: '$mensaje1',
            allowOutsideClick: false,
          	imageWidth: '150px',
        });</script>";
}
else{
	echo "<script>
        swal({
        	type: 'success',
        	title: '$mensaje2',
            allowOutsideClick: false,
          	imageWidth: '150px',
        }).then(function(){
        	window.location.replace('NuevoAuto.php');
    	});</script>";
}

?>

<!--a class="linkVolver" href="NuevoAuto.php">Volver</a><br-->
</div>
</body>
</html>
