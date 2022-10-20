
function ejswal() {
    Swal.fire("Ejemplo de un popup simple");
}

function ejswaltit() {
    Swal.fire("Ejemplo de Titulo", "Ejemplo de texto");
}

function ejswalicono() {
    Swal.fire("Ejemplo de Titulo", "Ejemplo de texto", "question");
}

function ejswalicono2() {
    Swal.fire({
        icon: "error",
        title: "Error",
        text: "Mensaje de error",
        footer: "<a href='../index.php'> Descubra su horoscopo</a>"
    });
}

function ejswalmulti() {
    Swal.fire({
        title: 'Aceptas los terminos y condiciones?',
        text: "No podras revertir lo que haras",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Exito!',
                text: "Ha confirmado mis sospechas...",
                icon: 'success'
        })
        } else {
            Swal.fire({
                title: 'Ha cancelado toda sospecha',
                icon: 'error',
             
            })
        }
    })
}


function ejswalimg() {
    texto = document.getElementById("texto").value;
    if (texto = "") {
    Swal.fire({
        title: 'Imagen!',
        text: 'Imagen Personalizada',
        imageUrl: texto,
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
    })} else {
        Swal.fire({
        title: 'Sin imagen!',
        text: 'No se ha ingresado ninguna imagen',
        icon: 'error'
        })
    }
}

function ejswalback() {
    Swal.fire({
        title: 'Fondo personalizado con un width, padding y color.',
        width: 600,
        padding: '3em',
        color: '#716add',
        backdrop: `rgba(0,0,123,0.6) url("https://i.pinimg.com/originals/33/64/82/33648269eebe9930164c9a4fa04f8ff4.gif") right top no-repeat`
    })
}
