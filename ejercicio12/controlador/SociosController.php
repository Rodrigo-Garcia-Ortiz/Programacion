<?php
require_once '../modelo/class_socio.php';

class SociosController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Socio();
    }

    public function agregarSocio($nombre, $apellido, $email, $telefono, $fecha_nacimiento) { //Guarda los datos del usuario en la base de datos
        $this->modelo->agregarSocio($nombre, $apellido, $email, $telefono, $fecha_nacimiento);
    }

    public function listarSocios() { //Recoge los datos de todos los usuarios de la base de datos
        return $this->modelo->obtenerSocios();
    }

    public function obtenerSocioPorId($id_socio) { //Recoge los datos del usuario del id indicado
        return $this->modelo->obtenerSocioPorId($id_socio);
    }

    public function actualizarSocio($id_socio, $nombre, $apellido, $email, $telefono, $fecha_nacimiento) { //Sobreescribe los datos del usuario indicado
        $this->modelo->actualizarSocio($id_socio, $nombre, $apellido, $email, $telefono, $fecha_nacimiento);
    }

    public function eliminarSocio($id_socio) { //Elimina los datos del usuario indicado
        $this->modelo->eliminarSocio($id_socio);
    }

}
?>