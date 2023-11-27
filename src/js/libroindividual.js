const inputCantidad = document.querySelector('.input-cantidad')
const btnIncrement = document.querySelector('#increment')
const btnDecrement = document.querySelector('#decrement')

let valueByDefault = parseInt(inputCantidad.value)

//Funciones de incremento/decremento
btnIncrement.addEventListener('click', () => {
    valueByDefault += 1
    inputCantidad.value = valueByDefault
})

btnDecrement.addEventListener('click', () => {
    if (valueByDefault !=1) {
        valueByDefault -= 1
    }else{
        inputCantidad.value = valueByDefault
    }
})

