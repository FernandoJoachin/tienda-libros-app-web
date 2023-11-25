<?php
include __DIR__ . "/template/header-admin.php";
?>
<div class="dashboard__grid">
    <?php
    include_once __DIR__ . '/template/sidebar-admin.php';
    ?>

    <main class="dashboard__contenido">
        <section class="crear">

            <h1 class="crear__titulo">Crear Libro</h1>

            <div class="crear__contenedor">


                <form class="formulario-crear">

                    <div class="formulario-crear__campo">
                        <input class="formulario-crear__input" name="texto-isbn" type="text" value="" required>
                        <span></span>
                        <label class="formulario-crear__label">ISBN</label>
                    </div>

                    <div class="formulario-crear__campo">
                        <input class="formulario-crear__input" name="texto-título" type="text" value="" required>
                        <span></span>
                        <label class="formulario-crear__label">Título</label>
                    </div>

                    <div class="formulario-crear__campo">
                        <input class="formulario-crear__input" name="texto-autor" type="text" value="" required>
                        <span></span>
                        <label class="formulario-crear__label">Autor</label>
                    </div>

                    <div class="formulario-crear__campo">
                        <input class="formulario-crear__input" name="edición" type="number" value="" required>
                        <span></span>
                        <label class="formulario-crear__label">Edición</label>
                    </div>

                    <div class="formulario-crear__campo">
                        <input class="formulario-crear__input" name="texto-categoría" type="text" value="" required>
                        <span></span>
                        <label class="formulario-crear__label">Categoría</label>
                    </div>

                    <div class="formulario-crear__campo">
                        <input class="formulario-crear__input" name="stock" type="number" value="" required>
                        <span></span>
                        <label class="formulario-crear__label">Stock</label>
                    </div>

                    <div class="formulario-crear__imagen">
                        <label class="formulario-crear__label--imagen">Imagen</label>
                        <br>
                        <input class="formulario-crear__input--imagen" type="file" name="Imagen" accept="image/*" required alt="">
                        <span></span>
                    </div>

                    <br>
                    <br>

                    <input type="submit" value="Enviar" class="formulario-crear__input--submit">


                </form>
            </div>

            <button class="crear__regresar" onclick="history.back()">Regresar</button>

        </section>
    </main>
</div>

<?php
include __DIR__ . "/template/footer-admin.php";
?>