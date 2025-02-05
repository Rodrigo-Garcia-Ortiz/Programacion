<?php
require_once '../config/conexion.php';

class Usuario {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function agregarUsuario($usuario, $contraseña, $rol) { //Guarda los datos del usuario en la base de datos
        $query = "INSERT INTO usuarios (usuario, contraseña, rol) VALUES (?, ?, ?)";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sss", $usuario, $contraseña, $rol);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_usuarios.php"); //Al terminar regresa a la lista de usuarios
        } else {
            echo "Error al agregar usuario: " . $stmt->error;
        }

        $stmt->close();
    }

    public function obtenerUsuarios() { //Recoge los datos de todos los usuarios de la base de datos
        $query = "SELECT * FROM usuarios";
        $resultado = $this->conexion->conexion->query($query);
        $usuarios = [];
        while ($fila = $resultado->fetch_assoc()) {
            $usuarios[] = $fila;
        }
        return $usuarios;
    }

    public function obtenerUsuarioPorId($id_usuario) { //Recoge los datos del usuario del id indicado
        $query = "SELECT * FROM usuarios WHERE id_usuario = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function actualizarUsuario($id_usuario, $usuario, $contraseña, $rol) { //Sobreescribe los datos del usuario indicado
        $query = "UPDATE usuarios SET usuario = ?, contraseña = ?, rol = ? WHERE id_usuario = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sssi", $usuario, $contraseña, $rol, $id_usuario);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_usuarios.php");
        } else {
            echo "Error al actualizar usuario: " . $stmt->error;
        }

        $stmt->close();
    }

    public function eliminarUsuario($id_usuario) { //Elimina los datos del usuario indicado
        $query = "DELETE FROM usuarios WHERE id_usuario = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_usuario);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_usuarios.php");
        } else {
            echo "Error al eliminar usuario: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>