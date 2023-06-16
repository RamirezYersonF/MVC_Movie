<?php

class PeliculasModels
{
    private $pdo;
    public function __construct()
    {
        require_once '../../Models/bd.php';
        $con =  new Conexion();
        $this->pdo = $con->dbconexion();
    }
    public function insertarDatosPeliculas($titulo, $descripcion, $imagen, $fecha_publicacion)
    {
        $statement = $this->pdo->prepare("INSERT INTO tb_peliculas (titulo, descripcion, imagen, fecha_publicacion) VALUES (:titulo, :descripcion, :imagen, :fecha_publicacion)");
        $statement->bindParam(":titulo", $titulo);
        $statement->bindParam(":descripcion", $descripcion);
        $statement->bindParam(":imagen", $imagen);
        $statement->bindParam(":fecha_publicacion", $fecha_publicacion);

        return ($statement->execute()) ? $this->pdo->lastInsertId() : false;
    }
    public function show($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM tb_peliculas WHERE id_peliculas = :id");
        $statement->bindParam(":id", $id);
        return ($statement->execute()) ? $statement->fetch() : false;
    }
    public function index()
    {
        $stament = $this->pdo->prepare("SELECT * FROM tb_peliculas");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function update($id, $titulo, $descripcion, $imagen, $fecha_publicacion)
    {
        $statement = $this->pdo->prepare("UPDATE tb_peliculas SET titulo = :titulo, descripcion = :descripcion, imagen = :imagen, fecha_publicacion = :fecha_publicacion WHERE id_peliculas = :id");
        $statement->bindParam(":id", $id);
        $statement->bindParam(":titulo", $titulo);
        $statement->bindParam(":descripcion", $descripcion);
        $statement->bindParam(":imagen", $imagen);
        $statement->bindParam(":fecha_publicacion", $fecha_publicacion);
        return ($statement->execute()) ? $id : false;
    }
    
    public function delete($id){
        $stament = $this->pdo->prepare("DELETE FROM tb_peliculas  WHERE id_peliculas = :id");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? true : false;
    }
}
