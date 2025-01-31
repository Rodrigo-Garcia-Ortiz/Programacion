<?php
require_once '../controlador/EventosController.php';
$controller = new EventosController();

$id_evento = $_GET['id_evento']; //Obtiene el id del usuario
$controller->eliminarEvento($id_evento) //Elimina al usuario indicado
?>