<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php $this->renderSection("titulo") ?></title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Righteous&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="<?= base_url();?>public/assets/css/app.css">
    </head>

    <body>
        <header class="header">
            <div class="contenedor contenido-header">
                <div class="header__barra">
                    <a href="#" class="logo">
                        <div class="logo__img">
                            <picture>
                                <source srcset="<?= base_url();?>public/assets/img/logo.avif" type="image/avif">
                                <source srcset="<?= base_url();?>public/assets/img/logo.webp" type="image/webp">
                                <img loading="lazy" width="200" height="200" src="<?= base_url();?>public/assets/img/logo.png" alt="Logo">
                            </picture>
                        </div>
                        <div class="logo__texto">
                            <h1 class="logo__titulo">Booke</h1>
                            <h2 class="logo__subtitulo">Tienda de libros en linea</h2>
                        </div>
                    </a>

                    <nav class="navegacion">
                        <a href="#" class="navegacion__enlace--active">Libros</a>
                        <a href="#" class="navegacion__enlace">Contacto</a>
                    </nav>

                    <div class="header__iconos">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                </div>
            </div>
        </header>

        <?php $this->renderSection("contenido"); ?>

        <footer class="footer">
            <a href="#" class="logo">
                <div class="logo__img">
                    <picture>
                        <source srcset="<?= base_url();?>public/assets/img/logo-inverso.avif" type="image/avif">
                        <source srcset="<?= base_url();?>public/assets/img/logo-inverso.webp" type="image/webp">
                        <img loading="lazy" width="200" height="200" src="<?= base_url();?>public/assets/img/logo-inverso.png" alt="Logo">
                    </picture>
                </div>
                <div class="logo__texto">
                    <h1 class="logo__titulo">Booke</h1>
                    <h2 class="logo__subtitulo logo__subtitulo--footer">Tienda de libros en linea</h2>
                </div>
            </a>
            <div class="footer__sociales">
                <a href="https://facebook.com" class="footer__social"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com" class="footer__social"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://instagram.com" class="footer__social"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://tiktok.com" class="footer__social"><i class="fa-brands fa-tiktok"></i></a>
            </div>
            <p class="footer__copyright text-center degradado"> Booke - Todos los derechos reservados &copy; 2023</p>
        </footer>

        <?php $this->renderSection("js"); ?>
    </body>
</html>