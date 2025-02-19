<?php
require_once '../modelo/class_receta.php';

class RecetasController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Receta();
    }

    public function agregarReceta($nombre, $elaboracion, $ingredientes) { //Guarda los datos de la receta en la base de datos
        $this->modelo->agregarReceta($nombre, $elaboracion, $ingredientes);
    }

    public function listarRecetas() { //Recoge los datos de todas las recetas de la base de datos
        return $this->modelo->obtenerRecetas();
    }

    public function obtenerRecetaPorId($id_receta) { //Recoge los datos de la receta del id indicado
        return $this->modelo->obtenerRecetaPorId($id_receta);
    }

    public function actualizarReceta($id_receta, $nombre, $elaboracion, $ingredientes) { //Sobreescribe los datos de la receta indicado
        $this->modelo->actualizarReceta($id_receta, $nombre, $elaboracion, $ingredientes);
    }

    public function eliminarReceta($id_receta) { //Elimina los datos de la receta indicada
        $this->modelo->eliminarReceta($id_receta);
    }

}
?>