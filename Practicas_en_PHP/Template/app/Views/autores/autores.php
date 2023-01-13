<?= $this->extend("views_template/template")?>

<?= $this->section("title")?>
    Biblioteca Virtual - Autores
<?= $this->endSection()?>

<?= $this->section("content")?>
    <div class="container bg-light">
        <h1 class="text-center main_color">Lista de autores</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Pais</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key):?>
                    <tr>
                    <td><?= $key->nombre ?></td>
                    <td><?= $key->apellido ?></td>
                    <td><?= $key->pais ?></td>
                    <td>
                    <a href=<?= BASE_URL?> role="button" class="btn btn-primary btn-sm">Detalles</a>
                    <a href=<?= BASE_URL."/autores/modificar_autores/".$key->autor_id?> role="button" class="btn btn-secondary btn-sm">Modificar</a>
                    <a href=<?= BASE_URL?> role="button" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>
<?= $this->endSection()?>