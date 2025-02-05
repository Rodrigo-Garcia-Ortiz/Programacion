<?php
require_once '../modelo/class_usuario.php';

class UsuariosController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Usuario();
    }

    public function agregarUsuario($usuario, $contraseña, $rol) { //Guarda los datos del usuario en la base de datos
        $this->modelo->agregarUsuario($usuario, $contraseña, $rol);
    }

    public function listarUsuarios() { //Recoge los datos de todos los usuarios de la base de datos
        return $this->modelo->obtenerUsuarios();
    }

    public function obtenerUsuarioPorId($id_usuario) { //Recoge los datos del usuario del id indicado
        return $this->modelo->obtenerUsuarioPorId($id_usuario);
    }

    public function actualizarUsuario($id_usuario, $usuario, $contraseña, $rol) { //Sobreescribe los datos del usuario indicado
        $this->modelo->actualizarUsuario($id_usuario, $usuario, $contraseña, $rol);
    }

    public function eliminarUsuario($id_usuario) { //Elimina los datos del usuario indicado
        $this->modelo->eliminarUsuario($id_usuario);
    }

}
?>