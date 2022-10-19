<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./util/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<body>
    <main id="contenedor">
    <h1 id="pc">Trabajo Practico Grupo N°3</h1>
    <h1 class="sec">Integrantes: Perez, Victoria - Rubio, Patricio - Valicenti, Sergio </h1>
    <h2 class="sec">Trabajo con las librerias combinadas:</h2>
    <input id="boton" type="button" value="Trabajo Grupal" onclick="tp()"><br>
    <h2 class="sec">Seleccione una de ellas para ver su funcionamiento:</h2>
    <input id="boton" type="button" value="Libreria FPDF" onclick="fpdf()"><br>
    <input id="boton" type="button" value="Libreria SweetAlert" onclick="swal()"><br>
    </main>
    <script>
        function tp () { 
            window.location.href = "./Vista/menu-librerias.php";
        }
        function fpdf () { 
            window.location.href = "./Vista/libreria-fpdf.php";
        }
        function swal () {
            window.location.href = "./Vista/indexswal.php";
        }
    </script>
</body>
</html>