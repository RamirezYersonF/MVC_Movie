<?php
require_once '../Plantillas/header.php';
?>
<div class="text-center mt-4">
    <h1 class="text-blac mb-4">Registro de peliculas</h1>
    <p class="text-primary">Aqui puede ir el mensaje de registro exitoso o no exitoso</p>
</div>

<form action="almacenar.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="container pb-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="form-group mb-3">
                                <label for="titulo p-3" style="padding: 15px 0;">Título de la película: </label>
                                <input type="text" name="titulo" class="form-control form-control-sm" id="titulo" placeholder="Ingrese el título de la película">
                            </div>
                            <div class="form-group mb-3">
                                <label for="descripcion" style="padding: 15px 0;">Descripción: </label>
                                <textarea class="form-control form-control-sm" name="descripcion" require id="descripcion" rows="3" placeholder="Ingrese la descripción de la película"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="imagen" style="padding: 15px 0;">Portada: </label><br>
                                <input type="file" name="imagen" class="form-control-file form-control-sm" require id="portada">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fecha_publicacion" style="padding: 15px 0;">Fecha de
                                    publicación: </label>
                                <input type="date" name="fecha_publicacion" class="form-control form-control-sm" require id="fecha_publicacion">
                            </div>
                            <div class="form-group mb-3">
                                <label for="genero" style="padding: 15px 0;">Género</label>
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

                            <button type="submit" require class="btn btn-primary" style="margin: 15px 0; width:100%;">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
require_once '../Plantillas/footer.php';
?>