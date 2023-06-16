    <?php
    require_once '../../Controllers/peliculasController.php';
    $obj = new peliculasController();
    $obj->update($_POST['id'], $_POST['titulo'], $_POST['descripcion'], $_POST['imagen'], $_POST['fecha_publicacion'], $_POST['genero']);


    ?>