<?= $this->extend("views_template/template")?>

<?= $this->section("title")?>
    Biblioteca Virtual - Modificar Autor
<?= $this->endSection()?>

<?= $this->section("content")?>
    <div class="container bg-light">
        <h1 class="text-center main_color">Modificar Autor</h1>
        <form action="#" method="POST">
            <div class="input-group mb-3">
                <label for="nombre" class="form-label col-2">Nombre: </label>
                <input id="nombre" type="text" class="form-control col-10" placeholder="Nombre" name="nombre" value=<?= $data[0]->nombre; ?>>
            </div>
            <div class="input-group mb-3">
                <label for="apellido" class="form-label col-2">Apellido: </label>
                <input id="apellido" type="text" class="form-control col-10" placeholder="Apellido" name="apellido" value=<?= $data[0]->apellido; ?>>
            </div>
            <div class="input-group mb-3">
                <label for="pais" class="form-label col-2">Pais: </label>
                <input id="pais" type="text" class="form-control col-10" placeholder="Pais" name="pais" value=<?= $data[0]->pais; ?>>
            </div>
            <div class="input-group mb-3">
                <label for="registro" class="form-label col-2">Fecha de Registro: </label>
                <input id="registro" type="text" class="form-control col-10" value=<?= $data[0]->fecha_registro;?>readonly>
            </div>
            <div class="input-group mb-3">
                <label for="cantidad" class="form-label col-2">Cantidad de Libros: </label>
                <input id="cantidad" type="text" class="form-control col-10" readonly>
            </div>
            <div class="input-group mb-3 justify-content-center">
                <a href=<?= BASE_URL?> role="button" class="btn btn-success btn-sm me-2">Aceptar</a>
                <a href=<?= BASE_URL?> role="button" class="btn btn-danger btn-sm">Cancelar</a>
            </div>
        </form>
    </div>
<?= $this->endSection()?>