<?php
require_once '../config/conexion.php';

class Receta {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function agregarReceta($nombre, $elaboracion, $ingredientes) { //Guarda los datos de la receta en la base de datos
        $query = "INSERT INTO recetas (nombre, elaboracion, ingredientes) VALUES (?, ?, ?)";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sss", $nombre, $elaboracion, $ingredientes);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_recetas.php"); //Al terminar regresa a la lista de recetas
        } else {
            echo "Error al agregar receta: " . $stmt->error;
        }

        $stmt->close();
    }

    public function obtenerRecetas() { //Recoge los datos de todas las recetas de la base de datos
        $query = "SELECT * FROM recetas";
        $resultado = $this->conexion->conexion->query($query);
        $tareas = [];
        while ($fila = $resultado->fetch_assoc()) {
            $tareas[] = $fila;
        }
        return $tareas;
    }

    public function obtenerRecetaPorId($id_receta) { //Recoge los datos de la receta del id indicado
        $query = "SELECT * FROM recetas WHERE id_receta = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_receta);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function actualizarReceta($id_receta, $nombre, $elaboracion, $ingredientes) {  //Sobreescribe los datos de la receta indicado
        $query = "UPDATE recetas SET nombre = ?, elaboracion = ?, ingredientes = ? WHERE id_receta = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sssi", $nombre, $elaboracion, $ingredientes, $id_receta);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_recetas.php");
        } else {
            echo "Error al actualizar receta: " . $stmt->error;
        }

        $stmt->close();
    }

    public function eliminarReceta($id_receta) { //Elimina los datos de la receta indicada
        $query = "DELETE FROM recetas WHERE id_receta = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_receta);

        if ($stmt->execute()) {
            header("Location: ../vista/lista_recetas.php");
        } else {
            echo "Error al eliminar receta: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>