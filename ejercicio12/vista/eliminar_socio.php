<?php
session_start();

require_once '../controlador/SociosController.php';
$controller = new SociosController();

$id_socio = $_GET['id']; //Obtiene el id del socio
$controller->eliminarSocio($id_socio) //Elimina al socio indicado
?>