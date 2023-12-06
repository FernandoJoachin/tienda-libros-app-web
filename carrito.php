<?php
    include __DIR__ ."/template/header.php";
?>
<?php
    $heroTitle = 'Carrito de Compras';
    include __DIR__ ."/template/hero.php";
?>

<main class="carrito">

    <div class="carrito__contenedor">

        <div class="carrito__regresar">
            <button id="botonAtras" class="carrito__regresar-boton">
            <p class="carrito__regresar-texto">Regresar</p>
            </button>
        </div>

        <p class="carrito__titulo">Artículos</p>

        <div class="carrito__articulo">
            <img src="build/imagenes/1.jpeg" alt="Portada" class="carrito__articulo-imagen">
            <p class="carrito__articulo-titulo">ELON MUSK</p>

            <div class="cantidad__contenedor">
                    <div class="cantidad__contenedor-incrementar-decrementar">
                        <i class="fa-solid fa-minus cantidad__btncolor" id="decrement"></i>
                        <input type="number" placeholder="1" value="1" min="1" class="cantidad__input">
                        <i class="fa-solid fa-plus cantidad__btncolor" id="increment"></i>
                    </div>
            </div>

            <p class="carrito__articulo-precio">$100</p>
            <p class="carrito__articulo-eliminar">Eliminar</p>
        </div>

        <div class="carrito__articulo">
            <img src="build/imagenes/2.jpeg" alt="Portada" class="carrito__articulo-imagen">
            <p class="carrito__articulo-titulo">THE DA VINCI CODE</p>

            <div class="cantidad__contenedor">
                    <div class="cantidad__contenedor-incrementar-decrementar">
                        <i class="fa-solid fa-minus cantidad__btncolor" id="decrement"></i>
                        <input type="number" placeholder="1" value="1" min="1" class="cantidad__input">
                        <i class="fa-solid fa-plus cantidad__btncolor" id="increment"></i>
                    </div>
            </div>

            <p class="carrito__articulo-precio">$100</p>
            <p class="carrito__articulo-eliminar">Eliminar</p>
        </div>
        
        <p id="carrito-vacio" class="carrito__vacio">Ups! El carrito está vacío, <a href="catalogo.php" class="carrito__enlace">elige algunos productos</a>.</p>
        <section id="cart-container">
        </section>
        <section id="totales" class="carrito__totales">
            <div>
                <p>Total unidades: <span id="cantidad">0</span></p>
                <p>Total precio: $<span id="precio">0</span></p>
            </div>
            
            <div>
                <button>Comprar</button>
                <button disabled>Reiniciar</button>
            </div>
        </section>
    </div>
</main>

<?php
    include __DIR__ ."/template/footer.php";
?>