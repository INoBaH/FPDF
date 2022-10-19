<!DOCTYPE html>
<html lang="es">

<head>
    <script src="../util/js/swal.js"></script>
    <link rel="stylesheet" href="../util/css/styleswal.css">
    <script src="../util/sweetalert/package/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../util/sweetalert/package/dist/sweetalert2.min.css">
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetAlert</title>
</head>

<body>
    <label class="" for="boton">Ejemplo Simple</label>
    <input class="boton" type="button" value="Click aqui" onclick="ejswal()"><br>
    <label for="boton">Ejemplo con Titulo</label>
    <input class="boton" type="button" value="Click aqui" onclick="ejswaltit()"><br>
    <label for="boton">Ejemplo con Icono</label>
    <input class="boton" type="button" value="Click aqui" onclick="ejswalicono()"><br>
    <label for="boton">Ejemplo con Footer</label>
    <input class="boton" type="button" value="Click aqui" onclick="ejswalicono2()"><br>
    <label for="boton">Ejemplo con opciones</label>
    <input class="boton" type="button" value="Click aqui" onclick="ejswalmulti()"><br>
    <label for="boton">Ejemplo con imagen personalizable</label>
    <input id="texto" type="text" placeholder="URL de Imagen">
    <input class="boton" type="button" value="Click aqui" onclick="ejswalimg()"><br>
    <label for="boton">Ejemplo con fondo</label>
    <input class="boton" type="button" value="Click aqui" onclick="ejswalback()"><br>
</body>

</html>