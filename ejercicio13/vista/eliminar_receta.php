<?php
require_once '../controlador/recetasController.php';
$controller = new RecetasController();

$id_receta = $_GET['id']; //Obtiene el id de la receta
$controller->eliminarReceta($id_receta) //Elimina la receta indicada
?>