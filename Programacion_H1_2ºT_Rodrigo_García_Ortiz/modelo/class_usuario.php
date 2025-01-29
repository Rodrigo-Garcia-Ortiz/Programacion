<?php
require_once '../configuracion/conexion.php';

class Usuario {
    private $conexion;

    public function __construct() { //Se conecta a la base de datos
        $this->conexion = new Conexion();
    }

    public function agregarUsuario($nombre, $apellido, $correo, $telefono, $edad, $plan, $paquete, $duracion) { //Agrega un nuevo usuario
        $query = "INSERT INTO usuarios (nombre, apellido, correo, telefono, edad) VALUES (?, ?, ?, ?, ?)"; //Introduce los datos en la tabla usuarios
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sssss", $nombre, $apellido, $correo, $telefono, $edad);


        if ($stmt->execute()) {

            $query = "INSERT INTO paquetes (plan, paquete, duracion) VALUES (?, ?, ?)"; //Introduce los datos en la tabla paquetes
            $stmt = $this->conexion->conexion->prepare($query);
            $stmt->bind_param("sss", $plan, $paquete, $duracion);


            if ($stmt->execute()) {
                header("Location: ../vista/lista_usuarios.php"); 
            } else {
                echo "Error al agregar usuario: " . $stmt->error;
            }

        } else {
            echo "Error al agregar usuario: " . $stmt->error;
        }

        $stmt->close();
    }

    public function obtenerUsuarios() {
        $query = "SELECT * FROM usuarios inner join paquetes on usuarios.id_usuario = paquetes.id_usuario"; //Recoge los datos de las tablas usuarios y paquetes
        $resultado = $this->conexion->conexion->query($query);
        $usuarios = [];
        while ($fila = $resultado->fetch_assoc()) {
            $usuarios[] = $fila;
        }
        return $usuarios;
    }

    public function obtenerUsuarioPorId($id_usuario) { //Muestra los datos del usuario correspondiente al id indicado
        $query = "SELECT * FROM usuarios inner join paquetes on usuarios.id_usuario = paquetes.id_usuario WHERE usuarios.id_usuario = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function actualizarUsuario($id_usuario, $nombre, $apellido, $correo, $telefono, $edad, $plan, $paquete, $duracion) { //Sustituye los datos del usuario indicado
        $query = "UPDATE usuarios SET nombre = ?, apellido = ?, correo = ?, telefono = ?, edad = ? WHERE id_usuario = ?"; //Sustituye los datos del usuario
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sssssi", $nombre, $apellido, $correo, $telefono, $edad, $id_usuario);

        if ($stmt->execute()) {

            $query = "UPDATE paquetes SET plan = ?, paquete = ?, duracion = ? WHERE id_usuario = ?"; //Sustituye los datos del paquete
            $stmt = $this->conexion->conexion->prepare($query);
            $stmt->bind_param("sssi", $plan, $paquete, $duracion, $id_usuario);

            if ($stmt->execute()) {
                header("Location: ../vista/lista_usuarios.php"); 
            } else {
                echo "Error al actualizar usuario: " . $stmt->error;
            }
        } else {
            echo "Error al actualizar usuario: " . $stmt->error;
        }

        $stmt->close();
    }

    public function eliminarUsuario($id_usuario) { //Elimina al usuario indicado
        $query = "DELETE FROM usuarios WHERE id_usuario = ?"; //Elimina los datos del usuario
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_usuario);

        

        if ($stmt->execute()) {

            $query = "DELETE FROM paquetes WHERE id_usuario = ?"; //Elimina los datos del paquete
            $stmt = $this->conexion->conexion->prepare($query);
            $stmt->bind_param("i", $id_usuario);

            if ($stmt->execute()) {
                header("Location: lista_usuarios.php");
            } else {
                echo "Error al eliminar usuario: " . $stmt->error;
            }
        } else {
            echo "Error al eliminar usuario: " . $stmt->error;
        }

        
        $stmt->close();
    }
}
?>