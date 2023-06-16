<?php
// Incluir la clase de conexión
require_once '../../Models/bd.php';
class LoginController
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function iniciarSesion($usuario, $contrasena, $correo)
    {
        $mensajes = [];
        if (empty($usuario) || empty($contrasena) || empty($correo)) {
            array_push($mensajes, "<p>Por favor, complete todos los campos</p>");
            return $mensajes;
        }

        $query = "SELECT * FROM tb_usuarios WHERE usuario = :usuario AND contrasena = :contrasena AND correo = :correo";
        $statement = $this->conexion->dbconexion()->prepare($query);
        $statement->execute([
            'usuario' => $usuario,
            'contrasena' => $contrasena,
            'correo' => $correo
        ]);

        $usuarioEncontrado = $statement->fetch(PDO::FETCH_ASSOC);
        if ($usuarioEncontrado) {
            array_push($mensajes, "Inicio de sesión exitoso. Redirigiendo...");
            return $mensajes;
        } else {
            array_push($mensajes, "Credenciales inválidas.");
            return $mensajes;
        }
    }
}


$loginController = new LoginController();

// Verificar si el formulario se envió
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
}
$mensajes = $loginController->iniciarSesion($usuario, $contrasena, $correo);
