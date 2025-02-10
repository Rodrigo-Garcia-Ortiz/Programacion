<?php
session_start();

require_once '../controlador/tareasController.php';
$controller = new TareasController();

$id_tarea = $_GET['id']; //Obtiene el id de la tarea
$estado = "completada";
$resultado = $controller->completarTarea($id_tarea, $estado); //Cambia el estado de la tarea a completado
?>