<?php
    $page = 'libroIndividual';
    include __DIR__ ."/template/header.php";
?>
<?php
    $heroTitle = 'Datos Libro';
    include __DIR__ ."/template/hero.php";
?>
<main>
    <form class="formulario-carrito-compras" method="POST">
        <div class="contenedor-info">
            <div class="contenedor-izquierda">
                <div class="contenedor-portada">
                    <picture>
                        <source srcset="./build/img/portadalibro.avif" type="image/avif">
                        <source srcset="./build/img/portadalibro.webp" type="image/webp">
                        <img loading="lazy" width="200" height="200" class="contenedor-portada_img" src="../../build/img/portadalibro.png" alt="portada">
                    </picture>
                </div>
                <div class="pie-de-foto">
                    <div class="pie-de-foto_envio">
                        <i class="fa-solid fa-truck fa-flip-horizontal"></i>
                        <span><p>ENV&Iacute;O GRATIS</p></span>
                    </div>
                </div>
            </div>
            <div class="cont-detalles">
                <div class="detalles-sup">
                    <span class="detalles-sup_negrita"><p>El conde de Montecristo</p></span>
                    <label class="detalles-sup_negrita">Precio MXN</label><br><br>
                </div>
                <div class="detalles">
                    <span class="detalles__titulo"><p>Detalles del Libro</p></span>
                    <span class="detalles__info">
                        <p>ISBN:</p>
                        <p>Autor:</p>
                        <p>Disponibles:</p>
                        <p>Edici&oacute;n:</p>
                        <p>Categoría:</p>
                    </span>
                </div>
                <div class="contenedor-carrito">
                    <button class="btn-add-cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Añadir al carrito
                    </button>
                </div>
            </div>
        </div>
        <a class="boton_regresar" href="catalogo.php">Regresar</a>
    </form>
</main>
<?php
    include __DIR__ ."/template/footer.php";
?>