<?php
require_once '../../Controllers/peliculasController.php';
$titulo =  $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['imagen'];
$genero = $_POST['genero'];
var_dump($genero);
$fecha_publicacion = $_POST['fecha_publicacion'];
$objet = new PeliculasController();
$objet->guardar($titulo, $descripcion, $imagen, $fecha_publicacion, $genero);
