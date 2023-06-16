<?php
require_once '../../Controllers/peliculasController.php';
$obj = new PeliculasController();
$obj->delete($_GET['id']);