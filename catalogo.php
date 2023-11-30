<?php
    $page = 'catalogo';
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

        <?php 
            require_once __DIR__ . '/controllers/BookController/obtenerLibros.php';
            $libros = obtenerLibros();
        ?>

        <div class="catalogo__grid contenedor">
            <?php foreach($libros as $libro){ ?>
                <a href="libroIndividual.php" class="libro">
                    <div class="libro__contenedor-imagen">
                        <picture>
                            <img class="libro__imagen" loading="lazy" src="./build/imagenes/<?php echo $libro->imagen ?>" alt="BookDefault">
                        </picture>
                    </div>
                    <div class="libro__contenido">
                        <h2 class="libro__titulo"><?= $libro->bookTitle?></h2>
                        <div class="libro__autor">
                            <img src="./build/img/User_Square.svg" alt="Autor" class="libro__autor-imagen">
                            <p  class="libro__autor-nombre"><?= $libro->bookAuthor?></p>
                        </div>
                        <p class="libro__precio">$<?= $libro->bookPrice?></p>
                    </div>
                    <button class="libro__enlace"><i class="fa-solid fa-cart-shopping"></i>Agregar al carrito</button>
                </a><!--libro-->
            <?php };?>
        </div>
    </div>
</main>
<?php
    include __DIR__ ."/template/footer.php";
?>