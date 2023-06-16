<?php
require_once '../../Views/Plantillas/header.php';
require_once '../../Controllers/peliculasController.php';
$obj = new PeliculasController();
$date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles de registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-success">Regresar</a>
    <a href="Editar.php?id=<?= $date[0] ?>" class="btn btn-primary">Actualizar</a>
    <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">¿Desea eliminar el registro?
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Una vez eliminado el registro, no será posible recuperar completamente los datos. La eliminación
                        de un registro implica que se eliminen permanentemente los datos asociados a ese registro en la
                        base de datos. No se mantendrá ninguna copia o respaldo de los datos eliminados.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="Eliminar.php?id<?= $date[0] ?>" class="btn btn-danger">Elimnar</a>
                    <!-- <button type="button" class="btn btn-danger">Eliminar</button> -->
                </div>
            </div>
        </div>
    </div>

</div>
<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Imagen</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha de publicación</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?php echo $date["id_peliculas"] ?></td>
            <td scope="col"><?php echo $date["titulo"] ?></td>
            <td scope="col"><?php echo $date["imagen"] ?></td>
            <td scope="col"><?php echo $date["descripcion"] ?></td>
            <td scope="col"><?php echo $date["fecha_publicacion"] ?></td>
        </tr>
    </tbody>
</table>
<?php
require_once '../../Views/Plantillas/footer.php';
?>