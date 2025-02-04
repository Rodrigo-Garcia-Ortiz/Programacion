<?php
require_once '../controlador/SociosController.php';
$controller = new SociosController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
}
$socios = $controller->agregarSocio($nombre, $apellido, $email, $telefono, $fecha_nacimiento); //Introduce los datos en la base de datos
?>