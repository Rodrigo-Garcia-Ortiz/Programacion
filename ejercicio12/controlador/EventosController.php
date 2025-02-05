<?php
require_once '../modelo/class_evento.php';

class EventosController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Evento();
    }

    public function agregarEvento($nombre, $fecha, $lugar) { //Guarda los datos del usuario en la base de datos
        $this->modelo->agregarEvento($nombre, $fecha, $lugar);
    }

    public function listarEventos() { //Recoge los datos de todos los usuarios de la base de datos
        return $this->modelo->obtenerEventos();
    }

    public function obtenerEventoPorId($id_evento) { //Recoge los datos del usuario del id indicado
        return $this->modelo->obtenerEventoPorId($id_evento);
    }

    public function actualizarEvento($id_evento, $nombre, $fecha, $lugar) { //Sobreescribe los datos del usuario indicado
        $this->modelo->actualizarEvento($id_evento, $nombre, $fecha, $lugar);
    }

    public function eliminarEvento($id_evento) { //Elimina los datos del usuario indicado
        $this->modelo->eliminarEvento($id_evento);
    }
}

?>