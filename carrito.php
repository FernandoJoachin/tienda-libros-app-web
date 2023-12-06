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

        <div id="articulos"></div>
        <!--Libros agreagdos al carrito-->
        
        <p id="carrito-vacio" class="carrito__vacio">Ups! El carrito está vacío, <a href="catalogo.php" class="carrito__enlace">elige algunos productos</a>.</p>
        
        <section id="totales" class="carrito__totales">

            <div class="carrito__totales-contenedor-totales">
                <p>Total Unidades: <span id="cantidad">0</span></p>
                <p>Total Precio: $<span id="precio">0</span></p>
            </div>
            
            <div class="carrito__totales-contenedor-botones">
                <button class="carrito__totales-reiniciar">Reiniciar</button>
                
                <button id="botonRealizarCompra" class="carrito__totales-comprar">Comprar</button>
            </div>
        </section>
    </div>
</main>

<?php
    include __DIR__ ."/template/footer.php";
?>