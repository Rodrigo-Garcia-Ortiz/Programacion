<?php
class Usuario{

    private $nombre; //Nombre del usuario
    private $email; //Correo del usuario

    public function __construct($nombre, $email){ //Inicializa los datos del usuario

        $this->nombre = $nombre;
        $this->email = $email; 

    }

    public function mostrarInfo(){ //Muestra los datos del usuario

        return "Nombre: ".$this->nombre."\n".
        "E-mail: ".$this->email."\n";

    }
}

class Administrador extends Usuario{

    private $nivelAcceso; //Nivel de acceso del administrador

    public function __construct($nombre, $email, $nivelAcceso){ //Inicializa los datos del administrador

        parent::__construct($nombre, $email);
        $this->nivelAcceso = $nivelAcceso;

    }

    public function mostrarInfo(){ //Muestra los datos del administrador

        return parent::mostrarInfo().
        "Nivel de acceso: ".$this->nivelAcceso."\n";

    }
}

$usuario = new Usuario("Juan", "Juan@gmail.com");
echo $usuario->mostrarInfo();

$administrador = new Administrador("Manuel", "Manuel@gmail.com", 3);
echo $administrador->mostrarInfo();
?>