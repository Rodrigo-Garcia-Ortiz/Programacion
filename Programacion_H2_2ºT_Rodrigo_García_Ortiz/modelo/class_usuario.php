<?php
require_once '../config/conexion.php';

class Usuario {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function registrarUsuario($nombre, $correo, $contrasena) { //Guarda los datos del usuario en la base de datos
        $query = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sss", $nombre, $correo, $contrasena);

        if ($stmt->execute()) {
            header("Location: ../index.php"); //Al terminar regresa al indice
        } else {
            echo "Error al registrar usuario: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>