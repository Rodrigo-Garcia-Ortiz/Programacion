<?php
require_once '../controlador/EventosController.php';
$controller = new EventosController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $lugar = $_POST['lugar'];
}
$eventos = $controller->agregarEvento($nombre, $fecha, $lugar); //Introduce los datos en la base de datos
?>