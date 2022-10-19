<?php
include_once "../configuracion.php";
$objAbmAuto = new AbmAuto();
$listaAuto = $objAbmAuto->buscar(null);
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
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
  <div><a class="linkVolver" href="menu-librerias.php">
        <button class="btn btn-responsive" title="Menu" id="botonMenu">Volver</button>
    </a></div>

<div class="container" align="center">


<?php	
  if(count($listaAuto)>0){
    $contador = 1;
    
    echo '<span class="titulo2">INFORMACIÓN DE AUTOS</span><br><br>';
    echo '<table class="table table-bordered">';

    echo '<tr><td id="tituloTabla">'."N°".'</td>';
    echo '<td id="tituloTabla">'."PATENTE".'</td>';
    echo '<td id="tituloTabla">'."MARCA".'</td>';
    echo '<td id="tituloTabla">'."MODELO".'</td>';
    echo '<td id="tituloTabla">'."KM".'</td>';
    echo '<td id="tituloTabla">'."AÑO".'</td>';
    echo '<td id="tituloTabla">'."ACCIONES".'</td>';
   
      
      foreach ($listaAuto as $objAuto) {

        $salida = "Patente: ".$objAuto->getPatente(). '\n'." Marca: ".$objAuto->getMarca(). '\n'."Modelo: ".$objAuto->getModelo(). '\n'."Km: ".$objAuto->getKm(). '\n'."Año: ".$objAuto->getAnio(). '\n'."Observaciones: ".'\n'.$objAuto->getObservaciones(). '\n';

        $pdfDatos = '<a class="linkDetalles" target="_blank" type="button" href="generarPdf.php?Patente='.$objAuto->getPatente().'"><button id="botonPdf">PDF</button></a>';

          /*$detalles = '<button onclick="verDatos('.$objAuto->getPatente().');" id="botonDetalles">Detalles</button>';*/

        echo '<tr><td id="subtituloTabla">'.$contador.'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getPatente().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getMarca().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getModelo().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getKm().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getAnio().'</td>';
        ?>
        <td id="subtituloTabla">
          <button id="botonDetalles" onclick="verDatos('<?php echo $salida ?>')">Detalles</button>
            <?php echo $pdfDatos; ?>
        </td>

        <?php
        $contador = $contador + 1;
  	  }
    echo '</table>';
  }

  else{
    echo '<br>';
    echo '<span class="titulo2">No hay autos cargados</span><br><br>';
  }
?>
</div>
</body>
</html>




<script type="text/javascript">
    function verDatos($datos){
    swal.fire({
      title: '<p><span style="color:#3A73A8; font-size: 30px; font-family: Arial;">DATOS DEL AUTO</span><br><br><span style="color:black; font-size: 16px; font-family: Arial;">'+$datos+'</span></p>', 
      width:'650px',
      allowOutsideClick: false,
      confirmButtonColor: '#03989e',
    });
  }
</script>