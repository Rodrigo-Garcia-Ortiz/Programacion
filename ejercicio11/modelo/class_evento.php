<?php
require_once '../config/conexion.php';

class Evento {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function agregarEvento($nombre, $fecha, $lugar) { //Guarda los datos del evento en la base de datos
        $query = "INSERT INTO eventos (nombre_evento, fecha, lugar) VALUES (?, ?, ?)";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sss", $nombre, $fecha, $lugar);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_eventos.php"); //Al terminar regresa a la lista de eventos
        } else {
            echo "Error al agregar evento: " . $stmt->error;
        }

        $stmt->close();
    }

    public function obtenerEventos() {
        $query = "SELECT * FROM eventos";
        $resultado = $this->conexion->conexion->query($query);
        $eventos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $eventos[] = $fila;
        }
        return $eventos;
    }

    public function obtenerEventoPorId($id_evento) {
        $query = "SELECT * FROM eventos WHERE id_evento = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_evento);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function actualizarEvento($id_evento, $nombre, $fecha, $lugar) { //Actualiza el evento indicado
        $query = "UPDATE eventos SET nombre = ?, fecha = ?, lugar = ? WHERE id_evento = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sssi", $nombre, $fecha, $lugar, $id_evento);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_eventos.php"); //Al terminar regresa a la lista de eventos
        } else {
            echo "Error al actualizar evento: " . $stmt->error;
        }

        $stmt->close();
    }

    public function eliminarEvento($id_evento) { //Elimina el evento indicado
        $query = "DELETE FROM eventos WHERE id_evento = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_evento);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_eventos.php"); //Al terminar regresa a la lista de eventos
        } else {
            echo "Error al eliminar evento: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>