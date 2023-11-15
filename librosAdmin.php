<?php
    include __DIR__ ."/template/header-admin.php";
    require_once __DIR__ . '/includes/funciones.php';
?>
<div class="dashboard__grid">
    <?php
        include_once __DIR__ .'/template/sidebar-admin.php';  
    ?>

    <main class="dashboard__contenido">
        <h1>Tabla Libros</h1>

        <div class="dashboard__contenedor-boton">
            <a class="dashboard__boton" href="#">
                <i class="fa-solid fa-circle-plus"></i>
                Añadir Libro
            </a>
        </div>

        <table id="books-table" class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">ISBN</th>
                    <th scope="col" class="table__th">Título</th>
                    <th scope="col" class="table__th">Autor</th>
                    <th scope="col" class="table__th">Edición</th>
                    <th scope="col" class="table__th">Categoría</th>
                    <th scope="col" class="table__th">Stock</th>
                    <th scope="col" class="table__th">Acciones</th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php for($i=0; $i<5; $i++){ ?>
                    
                    <tr class="table__tr">
                        <td class="table__td">978-0061122415</td>
                        <td class="table__td">Cien años de soledad</td>
                        <td class="table__td">Gabriel García Márquez</td>
                        <td class="table__td">1ra Edición</td>
                        <td class="table__td">Ficción latinoamericana</td>
                        <td class="table__td">25</td>
                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="#">
                            <i class="fa-solid fa-user-pen"></i>
                            Editar
                            </a>

                            <form method="POST" action="#" class="table__formulario">
                                <input type="hidden" name="id" value="#">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">978-0743273565</td>
                        <td class="table__td">To Kill a Mockingbird</td>
                        <td class="table__td">Harper Lee</td>
                        <td class="table__td">2da Edición</td>
                        <td class="table__td">Novela clásica</td>
                        <td class="table__td">20</td>
                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="#">
                            <i class="fa-solid fa-user-pen"></i>
                            Editar
                            </a>

                            <form method="POST" action="#" class="table__formulario">
                                <input type="hidden" name="id" value="#">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">978-0553382563</td>
                        <td class="table__td">The Da Vinci Code</td>
                        <td class="table__td">Dan Brown</td>
                        <td class="table__td">3ra Edición</td>
                        <td class="table__td">Thriller</td>
                        <td class="table__td">30</td>
                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="#">
                            <i class="fa-solid fa-user-pen"></i>
                            Editar
                            </a>

                            <form method="POST" action="#" class="table__formulario">
                                <input type="hidden" name="id" value="#">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php };?>
            </tbody>
            <tfoot class="table__thead">
                <tr>
                    <th scope="col" class="table__th">ISBN</th>
                    <th scope="col" class="table__th">Título</th>
                    <th scope="col" class="table__th">Autor</th>
                    <th scope="col" class="table__th">Edición</th>
                    <th scope="col" class="table__th">Categoría</th>
                    <th scope="col" class="table__th">Stock</th>
                    <th scope="col" class="table__th">Acciones</th>
                </tr>
            </tfoot>
        </table>
        <!-- table -->
    </main>
</div>
<?php
    include __DIR__ ."/template/footer-admin.php";
?>