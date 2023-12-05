<?php
    include __DIR__ ."/template/header.php";
?>
<?php
/*
    $heroTitle = 'Carrito de Compras';
    include __DIR__ ."/template/hero.php";
*/
?>

<main class="carrito">
    <div class="carrito__contenedor">
        <p id="carrito-vacio">Ups! El carrito está vacío, <a href="catalogo.php">elige algunos productos</a></p>
        <section id="cart-container">
        </section>
        <section id="totales" class="carrito__totales">
            <p>Total unidades: <span id="cantidad">0</span></p>
            <p>Total precio: $<span id="precio">0</span></p>
            <div>
                <button disabled>Comprar</button>
                <button id="reiniciar">Reiniciar</button>
            </div>
        </section>
    </div>
</main>

<?php
    include __DIR__ ."/template/footer.php";
?>