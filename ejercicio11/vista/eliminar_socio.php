<?php
require_once '../controlador/SociosController.php';
$controller = new SociosController();

$id_socio = $_GET['id_socio']; //Obtiene el id del usuario
$controller->eliminarSocio($id_socio) //Elimina al usuario indicado
?>