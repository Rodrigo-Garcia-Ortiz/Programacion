<?php
require_once '../modelo/class_tarea.php';

class TareasController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Tarea();
    }

    public function agregarTarea($usuario, $nombre, $estado) { //Guarda los datos de la tarea en la base de datos
        $this->modelo->agregarTarea($usuario, $nombre, $estado);
    }

    public function obtenerTareas($usuario) { //Recoge los datos de las tareas del usuario indicado
        return $this->modelo->obtenerTareas($usuario);
    }

    public function completarTarea($id_tarea, $estado) { //Marca la tarea como completada
        $this->modelo->completarTarea($id_tarea, $estado);
    }

    public function eliminarTarea($id_tarea) { //Elimina los datos de la tarea indicada
        $this->modelo->eliminarTarea($id_tarea);
    }

}
?>