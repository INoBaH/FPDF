
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
        text: "Usted toco un boton prohibido",
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
        confirmButtonText: 'Por favor, hazle un favor a esta humanidad'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Ha sido sentenciado a muchos UwUs',
                'Tu vida ha sido borrada de este mundo',
                'success'
            )
        } else {
            Swal.fire({
                title: 'True End',
                icon: 'error',
                text: 'Te has salvado de los UwUs'
            })
        }
    })
}


function ejswalimg() {
    texto = document.getElementById("texto").value;
    Swal.fire({
        title: 'Rico!',
        text: 'Imagen Personalizada',
        imageUrl: texto,
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
    })
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
