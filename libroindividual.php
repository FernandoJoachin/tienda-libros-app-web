<?php
    include __DIR__ ."/template/header.php";
?>
<div class="contenedor-titulo">
    <picture>
        <source srcset="./build/img/hero.avif" type="image/avif">
        <source srcset="./build/img/hero.webp" type="image/webp">
        <img loading="lazy" width="200" height="200" class="contenedor-titulo_fondonav" src="../../build/img/hero.png" alt="titulo">
    </picture>
</div>
<main>
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
                <span><p>“Lo m&aacute;s curioso que hay en la vida es el espect&aacute;culo de la muerte.”</p></span>
                <div class="pie-de-foto_envio">
                    <i class="fa-solid fa-truck fa-flip-horizontal"></i>
                    <span><p>ENV&Iacute;O GRATIS</p></span>
                </div>
            </div>
        </div>
        <div class="detalles-sup">
            <span class="detalles-sup_negrita"><p>El conde de Montecristo</p></span>
            <label class="detalles-sup_negrita">Precio MXN</label><br><br>
            <div class="contenedor-cantidad">
                <label>Cantidad</label>
                <div class="btn-incrementar-decrementar">
                    <i class="fa-solid fa-minus btncolor" id="decrement"></i>
                    <input type="number" placeholder="1" value="1" min="1" class="input-cantidad">
                    <i class="fa-solid fa-plus btncolor" id="increment"></i>
                </div>
            </div>
            <div class="contenedor-envios">
                <label>
                    <input type="radio" name="envio" value="rapido">
                    Env&iacute;o r&aacute;pido (+50 MXN)
                </label>
                <label>
                    <input type="radio" name="envio" value="gratis">
                    Env&iacute;o gratis
                </label>
            </div>
            <div class="contenedor-carrito">
                <button class="btn-add-cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Añadir al carrito
                </button>
            </div>
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
    </div>

    <div class="contenedor-boton">
        <picture>
            <source srcset="./build/img/BotonEnviar.avif" type="image/avif">
            <source srcset="./build/img/BotonEnviar.webp" type="image/webp">
            <img loading="lazy" class="boton_enviar" src="../../build/img/BotonEnviar.png" alt="Logo">
        </picture>
    </div>
</main>
<?php
    include __DIR__ ."/template/footer.php";
?>