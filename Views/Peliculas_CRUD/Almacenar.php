<?php
require_once '../../Controllers/peliculasController.php';

// Obtener los valores de los campos del formulario
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['imagen'];
$genero = $_POST['genero'];
$fecha_publicacion = $_POST['fecha_publicacion'];

// Verificar que los campos no estén vacíos
if (empty($titulo) || empty($descripcion) || empty($imagen) || empty($genero) || empty($fecha_publicacion)) {
    // Al menos uno de los campos está vacío
    echo "Por favor, completa todos los campos.";
} else {
    // Todos los campos tienen valores

    // Crear una instancia del controlador
    $objet = new PeliculasController();

    // Llamar al método guardar con los valores
    $objet->guardar($titulo, $descripcion, $imagen, $fecha_publicacion, $genero);
}
