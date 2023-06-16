<?php

class Conexion
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "crud_movies";

    public function dbconexion()
    {
        try {
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
            return $pdo;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
$conexion = new Conexion();
