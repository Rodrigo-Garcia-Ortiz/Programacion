<?php
session_start();

require_once '../controlador/EventosController.php';
$controller = new EventosController();

$id_evento = $_GET['id']; //Obtiene el id del evento
$controller->eliminarEvento($id_evento) //Elimina el evento indicado
?>