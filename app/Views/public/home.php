<?php $this->extend("template/layoutPublic"); ?>

<?php $this->section("titulo");?>
Home Bookoe
<?php $this->endSection("titulo");?> 

<?php $this->section("contenido");?>
<main class="main">
    <div class="contFuenteSup fuente">
        <span class="fuente_superior">Compra libros por<br/>el mejor </span><span class="fuente_dorada">precio.</span><br>
        <span class="fuente_inferior">¡Descubre los mejores precios para comprar libros!</span>
    </div>
    <div class="contBotonInf">
        <picture>
            <source srcset="<?= base_url();?>public/assets/img/Boton-Buscar.avif" type="image/avif">
            <source srcset="<?= base_url();?>public/assets/img/Boton-Buscar.webp" type="image/webp">
            <img class="boton_buscar" loading="lazy" src="<?= base_url();?>public/assets/img/Boton-Buscar.png" alt="Buscar">
        </picture>
        <picture>
            <source srcset="<?= base_url();?>public/assets/img/flecha.avif" type="image/avif">
            <source srcset="<?= base_url();?>public/assets/img/flecha-Buscar.webp" type="image/webp">
            <img class="boton_flecha" loading="lazy" src="<?= base_url();?>public/assets/img/flecha.png" alt="Buscar">
        </picture>
    </div>
    <div class="contDerecha">
        <picture>
            <source srcset="<?= base_url();?>public/assets/img/fondoazul.avif" type="image/avif">
            <source srcset="<?= base_url();?>public/assets/img/fondoazul.webp" type="image/webp">
            <img class="rectangulo_derecha" loading="lazy" src="<?= base_url();?>public/assets/img/fondoazul.png" alt="Libros">
        </picture>
        <picture>
            <source srcset="<?= base_url();?>public/assets/img/books_main.avif" type="image/avif">
            <source srcset="<?= base_url();?>public/assets/img/books_main.webp" type="image/webp">
            <img class="libros_grande" loading="lazy" src=".<?= base_url();?>public/assets/img/books_main.png" alt="Libros">
        </picture>
        <picture>
            <source srcset="<?= base_url();?>public/assets/img/fondomini.avif" type="image/avif">
            <source srcset="<?= base_url();?>public/assets/img/fondomini.webp" type="image/webp">
            <img class="rectangulo_izquierda" loading="lazy" src="<?= base_url();?>public/assets/img/fondomini.png" alt="Libros">
        </picture>
        <picture>
            <source srcset="<?= base_url();?>public/assets/img/book-stack_main.avif" type="image/avif">
            <source srcset="<?= base_url();?>public/assets/img/book-stack_main.webp" type="image/webp">
            <img class="libros_mini" loading="lazy" src=".<?= base_url();?>public/assets/img/book-stack_main.png" alt="Libros">
        </picture>
    </div>
</main>
<?php $this->endSection("contenido"); ?>