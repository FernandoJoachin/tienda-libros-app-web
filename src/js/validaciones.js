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



function validarFormulario() {
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

document.getElementsByClassName('formulario-crear')[0].addEventListener('submit', function (event) {
    if (!validarFormulario()) {
        event.preventDefault();
    }
});