<?= $this->extend("views_template/template")?>
<?= $this->section("title")?>
    Biblioteca Virtual - Libros
<?= $this->endSection()?>

<?= $this->section("content")?>
    <div class="container bg-light">
        <h1 class="text-center main_color">Lista de libros</h1>
        <a href=<?= BASE_URL."/libros/detalles_libro";?> class="btn btn-primary my-2" role="button">Agregar Libro</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha de publicación</th>
                <th scope="col">Edición</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key):?>
                    <tr>
                    <td><?= $key->nombre ?></td>
                    <td><?= $key->fecha_publicacion ?></td>
                    <td><?= $key->edicion ?></td>
                    <td>
                    <a href=<?= BASE_URL."/libros/detalles_libro/".$key->libro_id?> role="button" class="btn btn-secondary btn-sm">Ver Detalles</a>
                    <a href=<?= BASE_URL."/libros/eliminar_libro/".$key->libro_id?> role="button" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->endSection()?>