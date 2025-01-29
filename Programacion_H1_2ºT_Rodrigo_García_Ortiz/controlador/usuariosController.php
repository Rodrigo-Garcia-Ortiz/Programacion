<?php
require_once '../modelo/class_usuario.php';

class UsuariosController {
    private $modelo;

    public function __construct() { //Crea una instancia de usuario
        $this->modelo = new Usuario();
    }

    public function agregarUsuario($nombre, $apellido, $correo, $telefono, $edad, $plan, $paquete, $duracion) { //Agrega un nuevo usuario
        $this->modelo->agregarUsuario($nombre, $apellido, $correo, $telefono, $edad, $plan, $paquete, $duracion);
    }

    public function listarUsuarios() { //Lista los usuarios existentes
        return $this->modelo->obtenerUsuarios();
    }

    public function obtenerUsuarioPorId($id_usuario) { //Devuelve los datos del usuario correspondiente al id
        return $this->modelo->obtenerUsuarioPorId($id_usuario);
    }

    public function actualizarUsuario($id_usuario, $nombre, $apellido, $correo, $telefono, $edad, $plan, $paquete, $duracion) { //Actualiza los datos del usuario
        $this->modelo->actualizarUsuario($id_usuario, $nombre, $apellido, $correo, $telefono, $edad, $plan, $paquete, $duracion);
    }

    public function eliminarUsuario($id_usuario) { //Borra los datos del usuario
        $this->modelo->eliminarUsuario($id_usuario);
    }
}
?>