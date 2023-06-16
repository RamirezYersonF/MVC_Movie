<?php

class PeliculasController
{
    private $model;
    public function __construct()
    {
        require_once '../../Models/peliculasModels.php';
        $this->model = new PeliculasModels();
    }
    public function guardar($titulo, $descripcion, $imagen = null, $fecha_publicacion, $genero)
    {
        if ($imagen !== null) {
            $nombreArchivo = $_FILES['imagen']['name'];
            $ubicacionTemporal = $_FILES['imagen']['tmp_name'];

            $carpetaDestino = '../../img/';
            $rutaImagen = $carpetaDestino . $nombreArchivo;
            move_uploaded_file($ubicacionTemporal, $rutaImagen);
        } else {
            $rutaImagen = null;
        }

        $fecha_publicacion_converted = date('Y-m-d', strtotime($fecha_publicacion));

        $id = $this->model->insertarDatosPeliculas($titulo, $descripcion, $rutaImagen, $fecha_publicacion_converted, $genero);
        return ($id != false) ? header("Location:Detalles.php?id=" . $id) : header("Location:crear.php");
    }
    public function show($id)
    {
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
    }
    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update($id, $titulo, $descripcion, $imagen = null, $fecha_publicacion, $genero)
    {
        if ($imagen !== null) {
            $nombreArchivo = $_FILES['imagen']['name'];
            $ubicacionTemporal = $_FILES['imagen']['tmp_name'];

            $carpetaDestino = '../../img/';
            $rutaImagen = $carpetaDestino . $nombreArchivo;
            move_uploaded_file($ubicacionTemporal, $rutaImagen);
        } else {
            $rutaImagen = null;
        }

        return ($this->model->update($id, $titulo, $descripcion, $rutaImagen . $imagen, $fecha_publicacion, $genero) != false) ? header("Location:Detalles.php?id=" . $id) : header("Location:index.php");
    }
    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:Detalles.php?id=" . $id);
    }
}
