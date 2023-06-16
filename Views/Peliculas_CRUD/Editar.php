<?php
require_once '../../Views/Plantillas/header.php';
require_once '../../Controllers/peliculasController.php';
$obj = new PeliculasController();
$actualizar_registro = $obj->show($_GET['id']);

?>
<form action="Actualizar.php" method="post" autocomplete="off" style="margin:20px;">
    <h2 style="padding:20px 0">Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $actualizar_registro[0] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar Titulo:</label>
        <div class="col-sm-10">
            <input type="text" name="titulo" class="form-control" id="inputPassword" value="<?= $actualizar_registro[1] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar Descripcion</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" class="form-control" id="inputPassword" value="<?= $actualizar_registro[3] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar Imagen</label>
        <div class="col-sm-10">
            <?php if ($actualizar_registro[2]) : ?>
                <img src="<?php echo $actualizar_registro[2]; ?>" alt="Imagen actual" style="max-width: 200px; margin-bottom: 10px;">
            <?php endif; ?>
            <input type="file" name="imagen" class="form-control" id="inputPassword" value="<?php echo $actualizar_registro[2] ?>">
        </div>
    </div>



    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar fecha de publicacion</label>
        <div class="col-sm-10">
            <input type="date" name="fecha_publicacion" class="form-control" id="inputPassword" value="<?= $actualizar_registro[4] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar genero de pelicula</label>
        <div class="form-group mb-3">
            <select class="form-control form-control-sm" name="genero" required id="genero">
                <option value="accion">Tipo de Género</option>
                <option value="accion">Acción</option>
                <option value="aventura">Aventura</option>
                <option value="comedia">Comedia</option>
                <option value="drama">Drama</option>
                <option value="fantasia">Fantasía</option>
                <option value="ciencia_ficcion">Ciencia ficción</option>
                <option value="romance">Romance</option>
                <option value="terror">Terror</option>
                <option value="animacion">Animación</option>
                <option value="documental">Documental</option>
                <option value="otro">Otro</option>
            </select>
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="index.php?id=<?= $actualizar_registro[0] ?>">Cancelar</a>
    </div>
</form>