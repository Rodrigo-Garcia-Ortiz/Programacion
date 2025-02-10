<?php
session_start();

require_once '../controlador/tareasController.php';
$controller = new TareasController();

$id_tarea = $_GET['id']; //Obtiene el id de la tarea
$controller->eliminarTarea($id_tarea) //Elimina la tarea indicada
?>