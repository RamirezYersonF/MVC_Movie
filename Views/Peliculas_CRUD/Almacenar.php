<?php
require_once '../../Controllers/peliculasController.php';
$titulo =  $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['portada'];
$genero = $_POST['genero'];
$objet = new PeliculasController();
$objet->guardar($titulo, $descripcion, $imagen, $genero);
