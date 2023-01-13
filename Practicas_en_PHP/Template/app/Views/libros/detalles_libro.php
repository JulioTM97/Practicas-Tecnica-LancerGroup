<?= $this->extend("views_template/template")?>

<?= $this->section("title")?>
    Biblioteca Virtual - Detalles del Libro
<?= $this->endSection()?>

<?= $this->section("content")?>
    <div class="container bg-light">
        <h1 class="text-center main_color">Detalles del libro</h1>
        <form action=<?php if($estado=="agregando") echo BASE_URL."/libros/nuevo_libro"; elseif($estado=="modificando") echo BASE_URL."/libros/actualizar_libro";?>  method="POST" autocomplete="off">
            <div class="input-group mb-3">
                <label for="nombre" class="form-label col-2">Nombre: </label>
                <input id="nombre" type="text" class="form-control col-10" placeholder="Nombre" maxlength="30" name="nombre" required value=<?= $data[0]->nombre;?>>
            </div>
            <div class="input-group mb-3">
                <label for="Fecha de Publicacion" class="form-label col-2">Fecha de publicación: </label>
                <input id="Fecha de Publicacion" type="text" class="form-control col-10" placeholder="Fecha de Publicacion" name="fecha_publicacion" readonly value=<?= $data[0]->fecha_publicacion; ?>>
            </div>
            <div class="input-group mb-3">
                <label for="edicion" class="form-label col-2">Edición: </label>
                <input id="edicion" type="text" class="form-control col-10" placeholder="Edición" maxlength="30" name="edicion" required value=<?= $data[0]->edicion; ?>>
            </div>
            <div class="input-group mb-3">
                <label for="autor" class="form-label col-2">Autor: </label>
                <select class="form-select" aria-label="Default select example" name="autor_id" id="autor_id">
                    <?php foreach ($autores as $key):?>
                        <option <?php if($key->autor_id == $data[0]->autor_id) echo "selected"?> value=<?= $key->autor_id?>><?="$key->nombre $key->apellido"?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="input-group mb-3 justify-content-center">
                <?php if ($estado == "agregando"): ?>
                    <button id="btn_agregar" type="submit" class="btn btn-success btn-sm me-2">Agregar</button>
                <?php elseif ($estado == "modificando"): ?>
                    <button id="btn_modificar" type="submit" class="btn btn-success btn-sm me-2">Modificar</button>
                <?php endif ?>
                <a id="btn_volver" href=<?= BASE_URL?>/libros role="button" class="btn btn-secondary btn-sm">Volver</a>
            </div>
            <input id="libro_id" hidden type="text" class="form-control" name="libro_id" value=<?= $data[0]->libro_id; ?>>
        </form>
    </div>
<?= $this->endSection()?>