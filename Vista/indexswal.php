<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../util/js/swal.js"></script>
    <link rel="stylesheet" href="../util/css/styleswal.css">
    <script src="../util/sweetalert/package/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../util/sweetalert/package/dist/sweetalert2.min.css">
    <meta charset="UTF-8">

    <link rel="icon" href="../util/img/logo.ico" />
    <link rel="stylesheet" type="text/css" href="../util/css/bootstrap.min.css">
    <script type="text/javascript" src="../util/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../util/js/popper.min.js"></script>
    <script type="text/javascript" src="../util/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../util/css/estilos.css?v51" type="text/css">

    <title>SweetAlert</title>
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

            <span class="titulo3">Libreria SweetAlert2</span><br><br>
        </div>

        <h3>Página oficial</h3>
        <a class="link" href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a><br><br>

        <h3>¿Qué es SweetAlert2?</h3>
        <p>SweetAlert2 es una librería de Javascript que genera pop-ups de manera sencilla, con un diseño responsive y personalizable, reemplaza las viejas pop-ups predeterminadas de Js.
        </p><br>


        <h3>Sus principales características</h3>
        <ul>
            <li>Su diseño responsive.</li>
            <li>Personalizable (color, alineación, tipo de fuente, encabezado y pie de página, etc). </li>
            <li>Admisión de imágenes para los pop-ups (JPEG, PNG y GIF)</li>
            <li>Soporta links</li>
            <li>Usable para eventos</li>
        </ul>
        <br>

        <h3>Descarga & Instalación</h3>
        <p>Se puede instalar de forma manual o hacer referencia desde el git donde se encuentran subidos los archivos de la clase desde
            <a class="link" href="https://sweetalert2.github.io/#download">https://sweetalert2.github.io/#download</a>. Estas son las diferentes maneras en las que puedes habilitar la librería:
        </p>
        <ul>
            <li>Se puede habilitar de forma remota con este script: <br>
                <code class="hljs language-xml"><span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"//cdn.jsdelivr.net/npm/sweetalert2@11"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span></code>
            </li>

            <li> Se puede descargar de forma manual desde acá: <br>
                <a class="center" href="https://www.jsdelivr.com/package/npm/sweetalert2">https://www.jsdelivr.com/package/npm/sweetalert2</a>
            </li>

        </ul>
        <br>

        <h3>Uso</h3>
        <p> 1. Inicialice el complemento haciendo referencia a los archivos necesarios: <br>
            <code class="hljs language-xml"><span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"sweetalert2.all.min.js"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span></code>
        </p>
        <p> También puede incluir la hoja de estilo por separado si lo desea <br>
            <code class="hljs language-xml"><span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"sweetalert2.min.js"</span>&gt;</span> <br><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"stylesheet"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"sweetalert2.min.css"</span>&gt;</span></code> <br>
        </p>
        <p> O importar la libreria en un archivo para incluir sus funciones, se puede llamar con un require <br>
            <code> import Swal from 'sweetalert2' <br>
                const Swal = require('sweetalert2')
            </code>
        </p>
        <p>Es posible importar JS y CSS por separado, por ejemplo, si necesita personalizar estilos: <br>
            <code>
                import Swal from 'sweetalert2/dist/sweetalert2.js' <br>
                import 'sweetalert2/src/sweetalert2.scss'

            </code>
        </p>

        <p> 2. Llame a la función sweetAlert2 después de que se haya cargado la página: <br>
            Ejemplo de funcion: <br>
            <code>Swal.fire({ <br>
                title: 'Error!', <br>
                text: 'Do you want to continue', <br>
                icon: 'error', <br>
                confirmButtonText: 'Cool' <br>
                })
            </code>
        </p>

        <br>
        <h3>Ejemplos</h3>
        <br>

        <p>Ejemplo simple: <br>
        <input  class="btn btn-primary btn-lg" class="boton" type="button" value="Click aqui" onclick="ejswal()">
        </p>
        <p>Ejemplo con titulo: <br>
        <input  class="btn btn-primary btn-lg" class="boton" type="button" value="Click aqui" onclick="ejswaltit()"><br>
        </p>
        <p>Ejemplo con Icono: <br>
        <input class="btn btn-primary btn-lg" class="boton" type="button" value="Click aqui" onclick="ejswalicono()"><br>
        </p>
        <p>Ejemplo con Footer: <br>
        <input class="btn btn-primary btn-lg" class="boton" type="button" value="Click aqui" onclick="ejswalicono2()"><br>
        </p>
        <p>Ejemplo con opciones: <br>
        <input class="btn btn-primary btn-lg" class="boton" type="button" value="Click aqui" onclick="ejswalmulti()"><br>
        </p>
        <p>Ejemplo con imagen personalizable: <br>
        <input id="texto" type="text" placeholder="URL de Imagen">
        <input class="btn btn-primary btn-lg" class="boton" type="button" value="Click aqui" onclick="ejswalimg()"><br>
        </p>
        <p>Ejemplo con fondo: <br>
        <input class="btn btn-primary btn-lg" class="boton" type="button" value="Click aqui" onclick="ejswalback()"><br>
        </p>
        
      

        <!--
        <label for="boton">Ejemplo simple</label>
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
        <input class="boton" type="button" value="Click aqui" onclick="ejswalback()"><br>-->




    </div><br /><br /><br />

    </div><br><br>

</body>

</html>