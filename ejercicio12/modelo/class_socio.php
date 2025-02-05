<?php
require_once '../config/conexion.php';

class Socio {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function agregarSocio($nombre, $apellido, $email, $telefono, $fecha_nacimiento) { //Guarda los datos del socio en la base de datos
        $query = "INSERT INTO socios (nombre, apellido, email, telefono, fecha_nacimiento) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sssss", $nombre, $apellido, $email, $telefono, $fecha_nacimiento);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_socios.php"); //Al terminar regresa a la lista de socios
        } else {
            echo "Error al agregar socio: " . $stmt->error;
        }

        $stmt->close();
    }

    public function obtenerSocios() { //Recoge los datos de todos los socios de la base de datos
        $query = "SELECT * FROM socios";
        $resultado = $this->conexion->conexion->query($query);
        $socios = [];
        while ($fila = $resultado->fetch_assoc()) {
            $socios[] = $fila;
        }
        return $socios;
    }

    public function obtenerSocioPorId($id_socio) { //Recoge los datos del socio del id indicado
        $query = "SELECT * FROM socios WHERE id_socio = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_socio);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function actualizarSocio($id_socio, $nombre, $apellido, $email, $telefono, $fecha_nacimiento) {  //Sobreescribe los datos del usuario indicado
        $query = "UPDATE socios SET nombre = ?, apellido = ?, email = ?, telefono = ?, fecha_nacimiento = ? WHERE id_socio = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sssssi", $nombre, $apellido, $email, $telefono, $fecha_nacimiento, $id_socio);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_socios.php");
        } else {
            echo "Error al actualizar socio: " . $stmt->error;
        }

        $stmt->close();
    }

    public function eliminarSocio($id_socio) { //Elimina los datos del socio indicado
        $query = "DELETE FROM socios WHERE id_socio = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_socio);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_socios.php");
        } else {
            echo "Error al eliminar socio: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>