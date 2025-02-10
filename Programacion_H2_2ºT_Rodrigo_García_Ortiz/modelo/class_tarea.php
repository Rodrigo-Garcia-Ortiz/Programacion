<?php
require_once '../config/conexion.php';

class Tarea {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function agregarTarea($usuario, $nombre, $estado) { //Guarda los datos de la tarea en la base de datos
        $query = "INSERT INTO tarea (usuario, nombre, estado) VALUES (?, ?, ?)";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sss", $usuario, $nombre, $estado);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_tareas.php"); //Al terminar regresa a la lista de tareas
        } else {
            echo "Error al agregar tarea: " . $stmt->error;
        }

        $stmt->close();
    }

    public function obtenerTareas($usuario) { //Recoge los datos de todas las tareas del usuario en uso
        $query = "SELECT * FROM tarea where usuario = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $tareas = [];
        while ($fila = $resultado->fetch_assoc()) {
            $tareas[] = $fila;
        }
        return $tareas;
    }

    public function completarTarea($id_tarea, $estado) { //Marca la tarea como completada
        $query = "UPDATE tarea SET estado = ? WHERE id_tarea = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("si", $estado, $id_tarea);
        if ($stmt->execute()) {
            header("Location: ../vista/lista_tareas.php"); //Al terminar regresa a la lista de tareas
        } else {
            echo "Error al actualizar la tarea: " . $stmt->error;
        }

        $stmt->close();
    }

    public function eliminarTarea($id_tarea) { //Elimina los datos de la tarea indicada
        $query = "DELETE FROM tarea WHERE id_tarea = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_tarea);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_tareas.php"); //Al terminar regresa a la lista de tareas
        } else {
            echo "Error al eliminar la tarea: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>