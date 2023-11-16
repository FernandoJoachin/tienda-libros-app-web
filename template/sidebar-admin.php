<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="<?= $GLOBALS["raiz_sitio"] . "admin.php" ?>" class="dashboard__enlace <?php echo pagina_actual("/tienda-libros-app-web/admin.php") ? "dashboard__enlace--actual" : ""; ?>">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu--texto">
                Inicio
            </span>
        </a>

        <a href="<?= $GLOBALS["raiz_sitio"] . "librosAdmin.php" ?>" class="dashboard__enlace <?php echo pagina_actual("/tienda-libros-app-web/librosAdmin.php") ? "dashboard__enlace--actual" : ""; ?>">
            <i class="fa-solid fa-book dashboard__icono"></i>
            <span class="dashboard__menu--texto">
                Libros
            </span>
        </a>
    </nav>
</aside>