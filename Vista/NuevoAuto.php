<!DOCTYPE html>
<html lang="es">

<head>
  <title>Librerias</title>
  <link rel="icon" type="image/png" href="../util/imagenes/logo.ico"/>
  <link rel="stylesheet" type="text/css" href="../util/css/bootstrap.min.css">
  <script type="text/javascript" src="../util/js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../util/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../util/sweetalert/sweetalert2.min.css">
  <script type="text/javascript" src="../util/sweetalert/sweetalert2.min.js" ></script>
  <link rel="stylesheet" href="../util/css/estilos.css" type="text/css">
</head>


<body class="fondo"><br><br>
    <div><a class="linkVolver" href="menu-librerias.php">
        <button class="btn btn-responsive" title="Menu" id="botonMenu">Volver</button>
    </a></div>

<div class="container" align="center">
    <span class="titulo2">CARGAR AUTO</span><br><br>
    <form method="post" action="accionNuevoAuto.php" id="formularioAuto" enctype="multipart/form-data" onSubmit="return validacion();">

        <label class="subtitulo">Patente *</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="Patente" name="Patente" class="form-control" autocomplete="off" maxlength="10" style="text-transform: uppercase;">
        </div>

        <label class="subtitulo">Marca *</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="Marca" name="Marca" class="form-control" autocomplete="off" maxlength="30" style="text-transform: uppercase;">
        </div>

        <label class="subtitulo">Modelo *</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="Modelo" name="Modelo" class="form-control" autocomplete="off" maxlength="30" style="text-transform: uppercase;">
        </div>

        <label class="subtitulo">Cantidad Km*</label><br/>
        <div class="input-group mx-auto">
            <input type="number" id="Km" name="Km" class="form-control" autocomplete="off">
        </div>

        <label class="subtitulo">Año *</label><br/>
        <div class="input-group mx-auto">
            <input type="number" id="Anio" name="Anio" class="form-control" autocomplete="off">
        </div>

        <label class="subtitulo">Observaciones</label><br/>
        <div class="input-group mx-auto">
            <textarea type="text" id="Observaciones" name="Observaciones" class="form-control" autocomplete="off" maxlength="100" rows="4" style="text-transform: uppercase; resize:none"></textarea>
        </div><br>

        <label class="subtitulo">Adjuntar Imagen*</label><br/>
        <div class="form-group col-sm-12">
          <input class="form-control" name="Archivo" id="Archivo" type="file"><br>
        </div><br><br>

        <div class="form-group col-md-12">
          <div class="float-left" style="color:#3181C3">* Datos obligatorios</div>
          <button class="btn btn-responsive float-right" type="submit" id="botonInsertar" title="Insertar">Insertar</button>
          <button class="btn btn-responsive float-right" id="botonBorrar" title="Borrar">Borrar</button>
        </div>

    </form><br><br>
</div>
</div>
</body>
</html>

<style type="text/css">
.input-group { 
  width: 30%;
  margin-bottom: 15px;
}

</style>


<script type="text/javascript">
    
    function validacion(){
        salida = true;

        if((document.getElementById('Patente').value == '') && 
            (document.getElementById('Marca').value == '') && 
            (document.getElementById('Modelo').value == '') && 
            ((document.getElementById('Km').value == '') || (intval(document.getElementById('Km').value) >= 0)) &&
            ((document.getElementById('Anio').value == '')) &&
            (document.getElementById('Archivo').value == '')){ 
            
            return mensajeError("Faltan completar datos", "Complete los campos obligatorios");
            return false;
        }
        else{
            
            if(document.getElementById('Archivo').value != '') {
           
                archivo = document.getElementById('Archivo');
                if(archivo.files && archivo.files[0]){

                    if((archivo.files[0].type == "image/png") && (archivo.files[0].type == "image/jpg") && (archivo.files[0].type == "image/jpeg")){

                        return mensajeError("Extensión de archivo NO permitido", "Permitido png, jpg y jpeg");
                        return false;
                    }
                }
                else{
                    return mensajeError("Error al cargar el archivo", "Intente mas tarde");
                    return false;
                }
            }

            //El método test() ejecuta la búsqueda de una ocurrencia entre una expresión regular y una cadena especificada. Devuelve true o false.
            var km = document.getElementById('Km').value;
            if(km != '') {
                var exp1 = /^[0-9]+$/;
                if (!exp1.test(km)){
                    return mensajeError("Error de formato en <br>Cantidad de Km", "Debe ser númerico");
                    return false;
                }
            }
        }
        return salida;
    }


    function mensajeError($mensaje1, $mensaje2){
        swal.fire({
          type: 'error',
          /*imageUrl: 'img/alerta.jpg',*/
          title: $mensaje1,
          text: $mensaje2,
          allowOutsideClick: false,
          imageWidth: '160px',
        });
        return false;
    }


    $("#botonBorrar").on("click", function(event) {
        event.preventDefault();
        $('#formularioAuto').trigger("reset");
    });
 
</script>