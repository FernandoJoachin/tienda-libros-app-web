<?php
    include __DIR__ ."/template/header.php";
?>

<main class="contacto">

    <div class="contacto__contenedor">

        <form class= "formulario-contacto">

            <div class="formulario-contacto__campo">
                <input class="formulario-contacto__input" name="texto-nombre" type="text" value="" required>
                <span></span>
                <label class="formulario-contacto__label">Nombre</label>
            </div>

            <div class="formulario-contacto__campo">
                <input class="formulario-contacto__input" name="texto-apellido" type="text" value="" required>
                <span></span>
                <label class="formulario-contacto__label">Apellido</label>
            </div>

            <div class="formulario-contacto__campo">
                <input class="formulario-contacto__input" name="texto-correo" type="text" value="" required>
                <span></span>
                <label class="formulario-contacto__label">Correo</label>
            </div>

            <div class="formulario-contacto__campo">
                <input class="formulario-contacto__input" name="numero" type="number" value="" required>
                <span></span>
                <label class="formulario-contacto__label">Teléfono</label>
            </div>

            <div class="formulario-contacto__campo-textarea">
                <label class="formulario-contacto__label-textarea">Mensaje</label>
                <span></span>
                <textarea wrap="soft" class="formulario-contacto__textarea" name="mensaje" cols="35" rows="10"></textarea>
            </div>

            <input type="submit" value="Enviar" class="formulario-contacto__input--submit">
        
        </form>
    </div>
</main>

<?php
    include __DIR__ ."/template/footer.php";
?>