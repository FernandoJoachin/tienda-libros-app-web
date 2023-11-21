<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./build/css/app.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="contenido-header">
            <div class="header__barra">
                <a href="home.php" class="logo">
                    <div class="logo__img">
                        <picture>
                            <source srcset="./build/img/logo.avif" type="image/avif">
                            <source srcset="./build/img/logo.webp" type="image/webp">
                            <img loading="lazy" width="200" height="200" src="./build/img/logo.png" alt="Logo">
                        </picture>
                    </div>
                    <div class="logo__texto">
                        <h1 class="logo__titulo">Booke</h1>
                        <h2 class="logo__subtitulo">Tienda de libros en linea</h2>
                    </div>
                </a>

                <nav class="navegacion">
                    <a href="catalogo.php" class="navegacion__enlace<?= $isActive ?? ""?>">Libros</a>
                    <a href="contacto.php" class="navegacion__enlace<?= $isActive ?? ""?>">Contacto</a>
                </nav>

                <div class="header__iconos">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <i class="fa-solid fa-circle-user"></i>
                </div>
            </div>  
        </div>
    </header>