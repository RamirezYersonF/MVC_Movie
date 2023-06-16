<?php
class PeliculasController
{
    private $model;
    public function __construct()
    {
        require_once '../../Models/peliculasModels.php';
        $this->model = new PeliculasModels();
    }
    public function guardar($titulo, $descripcion, $imagen, $fecha_publicacion)
    {
        $id = $this->model->insertarDatosPeliculas($titulo, $descripcion, $imagen, $fecha_publicacion);
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
    public function update($id,$titulo, $descripcion, $imagen, $fecha_publicacion){
        return ($this->model->update($id,$titulo, $descripcion, $imagen, $fecha_publicacion) != false) ? header("Location:Detalles.php?id=".$id) : header("Location:index.php");
    }
    public function delete($id){
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:Detalles.php?id=".$id) ;
    }
}
