<?php
    include __DIR__ ."/template/header.php";
?>
<?php
    $heroTitle = 'Catálogo de Productos';
    include __DIR__ ."/template/hero.php";
?>

<main class="catalogo">
    <div class="catalogo__contenedor">
        <form class="formulario-filtro contenedor">
            <div class="formulario-filtro__campo">
                <label for="ubicacion" class="formulario-filtro__label">Libro</label>
                <input type="text" class="formulario-filtro__input" id="ubicacion" placeholder="Busca nombre o autor">
            </div>
            <div class="formulario-filtro__campo">
                <label for="huespedes " class="formulario-filtro__label">Categoría </label>
                <select class="formulario-filtro__input" name="categorias">
                    <option value="" disabled selected>Selecciona una categoría</option>
                    <option value="fantasia">Fantasía</option>
                    <option value="ciencia_ficcion">Ciencia Ficción</option>
                    <option value="misterio">Misterio</option>
                    <option value="romance">Romance</option>
                    <!-- Puedes agregar más opciones aquí -->
                </select>
            </div>
            <div class="formulario-filtro__campo">
                <input type="submit" class="formulario-filtro__submit" value="Enviar">
            </div>
        </form>
        <div class="catalogo__grid contenedor">
            <div class="libro">
                <div class="libro__contenedor-imagen">
                    <picture>
                        <source srcset="./build/img/BookDefault.avif" type="image/avif">
                        <source srcset="./build/img/BookDefault.webp" type="image/webp">
                        <img class="libro__imagen" loading="lazy" src="./build/img/BookDefault.png" alt="BookDefault">
                    </picture>
                </div>
                <div class="libro__contenido">
                    <h2 class="libro__titulo">El fin del Caos</h2>
                    <div class="libro__autor">
                        <img src="./build/img/User_Square.svg" alt="Autor" class="libro__autor-imagen">
                        <p  class="libro__autor-nombre">Jorge Castero</p>
                    </div>
                    <p class="libro__precio">$300.00</p>
                </div>
                <button class="libro__enlace"><i class="fa-solid fa-cart-shopping"></i>Agregar al carrito</button>
            </div><!--libro-->
            <div class="libro">
                <div class="libro__contenedor-imagen">
                    <picture>
                        <source srcset="./build/img/BookDefault.avif" type="image/avif">
                        <source srcset="./build/img/BookDefault.webp" type="image/webp">
                        <img class="libro__imagen" loading="lazy" src="./build/img/BookDefault.png" alt="BookDefault">
                    </picture>
                </div>
                <div class="libro__contenido">
                    <h2 class="libro__titulo">El fin del Caos</h2>
                    <div class="libro__autor">
                        <img src="./build/img/User_Square.svg" alt="Autor" class="libro__autor-imagen">
                        <p  class="libro__autor-nombre">Jorge Castero</p>
                    </div>
                    <p class="libro__precio">$300.00</p>
                </div>
                <button class="libro__enlace"><i class="fa-solid fa-cart-shopping"></i>Agregar al carrito</button>
            </div><!--libro-->
            <div class="libro">
                <div class="libro__contenedor-imagen">
                    <picture>
                        <source srcset="./build/img/BookDefault.avif" type="image/avif">
                        <source srcset="./build/img/BookDefault.webp" type="image/webp">
                        <img class="libro__imagen" loading="lazy" src="./build/img/BookDefault.png" alt="BookDefault">
                    </picture>
                </div>
                <div class="libro__contenido">
                    <h2 class="libro__titulo">El fin del Caos</h2>
                    <div class="libro__autor">
                        <img src="./build/img/User_Square.svg" alt="Autor" class="libro__autor-imagen">
                        <p  class="libro__autor-nombre">Jorge Castero</p>
                    </div>
                    <p class="libro__precio">$300.00</p>
                </div>
                <button class="libro__enlace"><i class="fa-solid fa-cart-shopping"></i>Agregar al carrito</button>
            </div><!--libro-->
        </div>
    </div>
</main>
<?php
    include __DIR__ ."/template/footer.php";
?>