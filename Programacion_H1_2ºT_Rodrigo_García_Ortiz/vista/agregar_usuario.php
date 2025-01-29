<?php
require_once '../controlador/usuariosController.php';
$controller = new UsuariosController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Recoge los datos introducidos en el formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $plan = $_POST['plan'];
    $paquete = $_POST['paquete'];
    $duracion = $_POST['duracion'];

}

$usuarios = $controller->agregarUsuario($nombre, $apellido, $correo, $telefono, $edad, $plan, $paquete, $duracion); //Agrega un nuevo usuario
?>