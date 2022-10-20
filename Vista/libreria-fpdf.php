<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <title>FPDF</title>
  <link rel="icon" href="../util/img/logo.ico" />
  <link rel="stylesheet" type="text/css" href="../util/css/bootstrap.min.css">
  <script type="text/javascript" src="../util/js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="../util/js/popper.min.js"></script>
  <script type="text/javascript" src="../util/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../util/css/estilos.css?v51" type="text/css">
</head>

<body class="fondo"><br><br>
  <div><a class="linkVolver" href="../index.php">
      <button class="btn btn-responsive" title="Menu" id="botonMenu">Volver</button>
    </a></div>

  <div class="container">

    <div align="center">
      <img class="logo" src="../util/img/logo.png" height="80px">
      <span class="titulo">PROGRAMACIÓN WEB DINÁMICA</span>
      <br><br><br>

      <span class="titulo3">Libreria FPDF</span><br><br>
    </div>

    <h3>Página oficial</h3>
    <a class="link" href="http://www.fpdf.org/">http://www.fpdf.org/</a><br><br>

    <h3>¿Qué es FPDF?</h3>
    <p>FPDF es una clase escrita en PHP que permite generar documentos PDF directamente desde PHP. La F de FPDF significa Free (gratis y libre) la cual puede usarse para cualquier propósito y modificarse a su gusto para satisfacer sus necesidades.</p><br>


    <h3>Sus principales características</h3>
    <ul>
      <li>Gestión de cabeceras y pies de página</li>
      <li>Salto de página automático</li>
      <li>Salto de línea y justificación del texto automáticos</li>
      <li>Admisión de imágenes (JPEG, PNG y GIF)</li>
      <li>Realizar tablas</li>
      <li>Manejar colores</li>
    </ul>
    <br>

    <h3>Compatibilidad de versiones de PHP</h3>
    <p>Funciona con PHP 5 (≥ 5.1), PHP 7 y PHP 8</p><br>


    <h3>Instalación de FPDF para PHP</h3>
    <p>Accediendo a <a class="link" href="http://www.fpdf.org/es/download.php">http://www.fpdf.org/es/download.php</a> se puede descargar los archivos y agregarlos directamente a su proyecto.</p><br>


    <h3>Estructura</h3>
    <img class="estructura1" src="../util/img/estructura1.jpg" height="300px">
    <br>
    <br>
    <h3>Ejemplo basico de su funcionamiento</h3>
    <br>
    <form action="./ejpdf.php" method="post" target="_blank">
    <textarea class="" placeholder="Ingrese un texto" name="texto" id="" style="resize: none" cols="60" rows="15"></textarea> <br>
    <input class="btn btn-primary btn-lg" type="submit">
    </form>




  </div><br /><br /><br />

  </div><br><br>

</body>

</html>