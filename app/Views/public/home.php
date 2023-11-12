<?php $this->extend("template/layoutPublic"); ?>

<?php $this->section("titulo");?>
Home Bookoe
<?php $this->endSection("titulo");?> 

<?php $this->section("contenido");?>
<main class="home contenedor">
    <div class="home__grid">
        <div class="home__contenedor">
            <div class="home__contenido">
                <p class="home__titulo">Compra libros por el mejor <span class="home__titulo-span">precio</span></p>
                <p class="home__subtitulo">¡Descubre los mejores precios para comprar libros!</p>
                <div class="home__buscador">
                    <a href="#" class="home__buscador-enlace">
                        <picture>
                            <source srcset="<?= base_url();?>public/assets/img/Boton-Buscar.avif" type="image/avif">
                            <source srcset="<?= base_url();?>public/assets/img/Boton-Buscar.webp" type="image/webp">
                            <img class="home__boton-buscar" loading="lazy" src="<?= base_url();?>public/assets/img/Boton-Buscar.png" alt="Buscar">
                        </picture>
                        <picture>
                            <source srcset="<?= base_url();?>public/assets/img/flecha.avif" type="image/avif">
                            <source srcset="<?= base_url();?>public/assets/img/flecha-Buscar.webp" type="image/webp">
                            <img class="home__boton-flecha" loading="lazy" src="<?= base_url();?>public/assets/img/flecha.png" alt="Buscar">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
        <div class="home__contenido-imagen">
            <picture>
                <source srcset="<?= base_url();?>public/assets/img/homeIcon.avif" type="image/avif">
                <source srcset="<?= base_url();?>public/assets/img/homeIcon-Buscar.webp" type="image/webp">
                <img class="home__imagen" loading="lazy" src="<?= base_url();?>public/assets/img/homeIcon.png" alt="IconoHome">
            </picture>
        </div>
    </div>
</main>
<?php $this->endSection("contenido"); ?>