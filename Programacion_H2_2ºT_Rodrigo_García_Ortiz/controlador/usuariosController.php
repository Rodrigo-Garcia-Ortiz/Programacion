<?php
require_once '../modelo/class_usuario.php';

class UsuariosController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Usuario();
    }

    public function registrarUsuario($nombre, $correo, $contrasena) { //Guarda los datos del usuario en la base de datos
        $this->modelo->registrarUsuario($nombre, $correo, $contrasena);
    }
}
?>