<?php
require_once '../../Views/Plantillas/header.php';
require_once '../../Controllers/peliculasController.php';
$obj = new PeliculasController();
$actualizar_registro = $obj->show($_GET['id']);

?>
 <form action="Actualizar.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $actualizar_registro[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar Titulo:</label>
        <div class="col-sm-10">
            <input type="text" name="titulo" class="form-control" id="inputPassword" value="<?= $actualizar_registro[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar Descripcion</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" class="form-control" id="inputPassword" value="<?= $actualizar_registro[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar Imagen</label>
        <div class="col-sm-10">
            <input type="file" name="imagen" class="form-control" id="inputPassword" value="<?= $actualizar_registro[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar fecha de publicacion</label>
        <div class="col-sm-10">
            <input type="date" name="fecha_publicacion" class="form-control" id="inputPassword" value="<?= $actualizar_registro[4]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="Editar.php?id=<?= $actualizar_registro[0]?>">Cancelar</a>
    </div>
  </form>

<?php
require_once '../../Views/Plantillas/footer.php';
?>