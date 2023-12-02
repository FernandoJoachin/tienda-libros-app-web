function mostrarModal(mensaje) {
    const modal = document.getElementById('modalAlerta');
    const modalMessage = document.getElementById('modal-message');

    modalMessage.textContent = mensaje;
    modal.style.display = 'block';

    document.getElementsByClassName('close')[0].addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
}

// Función para validar campo obligatorio
function validarCampoObligatorio(valor, mensaje) {
    if (valor.trim() === '') {
        mostrarModal(mensaje);
        return false;
    }
    return true;
}

// Función para validar número entero
function validarNumeroEntero(valor, mensaje) {
    if (!(/^\d+$/.test(valor))) {
        mostrarModal(mensaje);
        return false;
    }
    return true;
}

// Función para validar que un número no sea negativo
function validarNumeroNoNegativo(valor, mensaje) {
    if (parseInt(valor) < 0) {
        mostrarModal(mensaje);
        return false;
    }
    return true;
}

function validarCorreoElectronico(correo, mensaje) {
    const regexCorreo = /\S+@\S+\.\S+/;
    if (!regexCorreo.test(correo)) {
        mostrarModal(mensaje);
        return false;
    }
    return true;
}

function validarNoNumeros(valor, mensaje) {
    const contieneNumeros = /\d/.test(valor);
    if (contieneNumeros) {
        mostrarModal(mensaje);
        return false;
    }
    return true;
}




function validarFormularioCrear() {
    // Obtener valores de los campos
    const isbn = document.getElementsByName('bookIsbn')[0].value;
    const titulo = document.getElementsByName('bookTitle')[0].value;
    const autor = document.getElementsByName('bookAuthor')[0].value;
    const edicion = document.getElementsByName('bookEdition')[0].value;
    const categoria = document.getElementsByName('bookCategory')[0].value;
    const precio = document.getElementsByName('bookPrice')[0].value;
    const stock = document.getElementsByName('bookStock')[0].value;
    const imagen = document.getElementsByName('bookImage')[0].value;

    if (
        !validarCampoObligatorio(isbn, 'Por favor, ingresa el ISBN.') ||
        !validarCampoObligatorio(titulo, 'Por favor, ingresa un título.') ||
        !validarCampoObligatorio(autor, 'Por favor, ingresa el autor.') ||
        !validarCampoObligatorio(edicion, 'Por favor, ingresa la edición.') ||
        !validarCampoObligatorio(categoria, 'Por favor, ingresa la categoría.') ||
        !validarCampoObligatorio(precio, 'Por favor, ingresa el precio.') ||
        !validarNumeroNoNegativo(precio, 'El precio debe ser un número positivo.') ||
        !validarCampoObligatorio(stock, 'Por favor, ingresa el stock.') ||
        !validarNumeroEntero(stock, 'El stock debe ser un número entero.') ||
        !validarNumeroNoNegativo(stock, 'El stock debe ser un número positivo.') ||
        !validarCampoObligatorio(imagen, 'Por favor, selecciona una imagen.')
    ) {
        return false;
    }
    return true;
}

function validarFormularioContacto() {
    // Obtener valores de los campos
    const cnombre = document.getElementsByName('texto-nombre')[0].value;
    const capellido = document.getElementsByName('texto-apellido')[0].value;
    const ccorreo = document.getElementsByName('texto-correo')[0].value;
    const cnumero = document.getElementsByName('numero')[0].value;
    const cmensaje = document.getElementsByName('mensaje')[0].value;

    if (
        !validarCampoObligatorio(cnombre, 'Por favor, ingresa tu nombre.') ||
        !validarNoNumeros(cnombre, 'Por favor, ingresa un nombre válido.') ||
        !validarCampoObligatorio(capellido, 'Por favor, ingresa tu apellido.') ||
        !validarNoNumeros(capellido, 'Por favor, ingresa un apellido válido.') ||
        !validarCampoObligatorio(ccorreo, 'Por favor, ingresa tu correo.') ||
        !validarCorreoElectronico(ccorreo, 'Por favor, ingresa un correo válido.') ||
        !validarCampoObligatorio(cnumero, 'Por favor, ingresa un tu número.') ||
        !validarCampoObligatorio(cmensaje, 'Por favor, ingresa un tu mensaje.')
    ) {
        return false;
    }
    return true;
}

document.querySelector('.formulario-crear').addEventListener('submit', function (event) {
    console.log('Evento formulario-crear');
    if (!validarFormularioCrear()) {
        event.preventDefault();
    }
});

document.querySelector('.formulario-contacto').addEventListener('submit', function (event) {
    console.log('Evento formulario-contacto');
    if (!validarFormularioContacto()) {
        event.preventDefault();
    }
});



