<?= $this->extend("views_template/template")?>

<?= $this->section("title")?>
    Biblioteca Virtual - Inicio
<?= $this->endSection()?>

<?= $this->section("content")?>
    <div class="container bg-light my-3 py-2 rounded">
        <div class="card my-3">
            <h5 class="card-header main_color h2">Listado de Autores</h5>
            <div class="card-body">
                <h5 class="card-title">Accede a la base de datos de autores</h5>
                <p class="card-text">Con el enlace siguiente podrás consultar el listado de autores que se encuentran en el sistema, donde podrás agregar más autores, modificar los existentes o eliminar alguno.</p>
                <a class="btn btn-primary" href=<?= BASE_URL;?>/autores>Ver Autores</a>
            </div>
        </div>
    </div>

    <div class="container bg-light my-3 py-2 rounded">
        <div class="card my-3">
            <h5 class="card-header main_color h2">Listado de Libros</h5>
            <div class="card-body">
                <h5 class="card-title">Accede a la base de datos de Libros</h5>
                <p class="card-text">Con el enlace siguiente podrás consultar el listado de libros que se encuentran en el sistema, donde podrás agregar más libros, modificar los libros existentes o eliminar alguno.</p>
                <a class="btn btn-primary" href=<?= BASE_URL;?>/libros>Ver Libros</a>
            </div>
        </div>
    </div>
<?= $this->endSection()?>
