<?php
require_once '../controlador/usuariosController.php';
$controller = new UsuariosController();

$id_usuario = $_GET['id_usuario']; //Obtiene el id del usuario
$controller->eliminarUsuario($id_usuario) //Elimina al usuario indicado
?>