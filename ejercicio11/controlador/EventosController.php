<?php
require_once '../modelo/class_evento.php';

class EventosController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Evento();
    }

    public function agregarEvento($nombre, $fecha, $lugar) {
        $this->modelo->agregarEvento($nombre, $fecha, $lugar);
    }

    public function listarEventos() {
        return $this->modelo->obtenerEventos();
    }

    public function obtenerEventoPorId($id_evento) {
        return $this->modelo->obtenerEventoPorId($id_evento);
    }

    public function actualizarEvento($id_evento, $nombre, $fecha, $lugar) {
        $this->modelo->actualizarEvento($id_evento, $nombre, $fecha, $lugar);
    }

    public function eliminarEvento($id_evento) {
        $this->modelo->eliminarEvento($id_evento);
    }
}

?>