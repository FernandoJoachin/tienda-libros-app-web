<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="<?= $GLOBALS["raiz_sitio"] . "admin" ?>" class="dashboard__enlace <?php echo pagina_actual("/tienda-libros-app-web/admin") ? "dashboard__enlace--actual" : ""; ?>">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu--texto">
                Inicio
            </span>
        </a>

        <a href="<?= $GLOBALS["raiz_sitio"] . "librosAdmin" ?>" class="dashboard__enlace <?php echo pagina_actual("/tienda-libros-app-web/librosAdmin") ? "dashboard__enlace--actual" : ""; ?>">
            <i class="fa-solid fa-book dashboard__icono"></i>
            <span class="dashboard__menu--texto">
                Libros
            </span>
        </a>
    </nav>
</aside>