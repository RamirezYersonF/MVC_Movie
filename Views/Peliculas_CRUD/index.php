<?php
require_once '../../Views/Plantillas/header.php';
require_once '../../Controllers/peliculasController.php';
$obj = new PeliculasController();
$rows = $obj->index();
?>
<div class="mb-3" style="margin: 40px 0 ;">
    <a href="Crear.php" class="btn btn-primary">Agregar nueva pelicula</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id pelicula</th>
            <th scope="col">Nombre de pelicula</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($rows) : ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th>
                        <a href="Detalles.php?id=<?= $row[0] ?>" class="btn btn-primary">Ver</a>
                        <a href="Editar.php?id=<?= $row[0] ?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?= $row[0] ?>">Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="id<?= $row[0] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Una vez eliminado el registro, no será posible recuperar completamente los datos. La
                                        eliminación de un registro implica que se eliminen permanentemente los datos asociados a
                                        ese registro en la base de datos. No se mantendrá ninguna copia o respaldo de los datos
                                        eliminados.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="Eliminar.php?id=<?= $row[0] ?>" class="btn btn-danger">Eliminar</a>
                                        <!-- <button type="button" >Eliminar</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>