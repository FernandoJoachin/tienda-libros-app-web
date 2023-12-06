(() => {
    const inputCantidad = document.querySelector('.cantidad__input');
    if(inputCantidad){
        const btnIncrement = document.querySelector('#increment');
        const btnDecrement = document.querySelector('#decrement');
        
        //Funciones de incremento/decremento
        btnIncrement.addEventListener('click', () => {
            inputCantidad.value = parseInt(inputCantidad.value) + 1
        });
        
        btnDecrement.addEventListener('click', () => {
            if (inputCantidad.value !=1) {
                inputCantidad.value = parseInt(inputCantidad.value) - 1
            }
        });
    }
})();

document.getElementById('botonAtras').addEventListener('click', function() {
    window.history.back();
});