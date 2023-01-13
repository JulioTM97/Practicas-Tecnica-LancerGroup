<?= $this->extend("views_template/template")?>

<?= $this->section("title")?>
    Biblioteca Virtual - Detalles del Autor
<?= $this->endSection()?>

<?= $this->section("content")?>
    <div class="container bg-light">
        <h1 class="text-center main_color">Detalles del Autor</h1>
        <form action=<?php if($estado=="agregando") echo BASE_URL."/autores/nuevo_autor"; elseif($estado=="modificando") echo BASE_URL."/autores/actualizar_autor";?>  method="POST" autocomplete="off">
            <div class="input-group mb-3">
                <label for="nombre" class="form-label col-2">Nombre: </label>
                <input id="nombre" type="text" class="form-control col-10" placeholder="Nombre" maxlength="30" name="nombre" required value=<?= $data[0]->nombre; ?>>
            </div>
            <div class="input-group mb-3">
                <label for="apellido" class="form-label col-2">Apellido: </label>
                <input id="apellido" type="text" class="form-control col-10" placeholder="Apellido" maxlength="30" name="apellido" required value=<?= $data[0]->apellido; ?>>
            </div>
            <div class="input-group mb-3">
                <label for="pais" class="form-label col-2">Pais: </label>
                <input id="pais" type="text" class="form-control col-10" placeholder="Pais" maxlength="30" name="pais" required value=<?= $data[0]->pais; ?>>
            </div>
            <div class="input-group mb-3">
                <label for="registro" class="form-label col-2">Fecha de Registro: </label>
                <input id="registro" readonly type="text" class="form-control col-10" value=<?= $data[0]->fecha_registro;?> >
            </div>
            <div class="input-group mb-3">
                <label for="cantidad" class="form-label col-2">Cantidad de Libros: </label>
                <input id="cantidad" type="text" class="form-control col-10" readonly>
            </div>
            <div class="input-group mb-3 justify-content-center">
                <?php if ($estado == "agregando"): ?>
                    <button id="btn_agregar" type="submit" class="btn btn-success btn-sm me-2">Agregar</button>
                <?php elseif ($estado == "modificando"): ?>
                    <button id="btn_modificar" type="submit" class="btn btn-success btn-sm me-2">Modificar</button>
                <?php endif ?>
                <a id="btn_volver" href=<?= BASE_URL?>/autores role="button" class="btn btn-secondary btn-sm">Volver</a>
            </div>
            <input id="autor_id" type="text" class="form-control" name="autor_id" value=<?= $data[0]->autor_id; ?>>
        </form>
    </div>
<?= $this->endSection()?>