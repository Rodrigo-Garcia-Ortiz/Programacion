<?php
class Empleado{

    public $nombre; //Nombre del empleado
    public $sueldo; //Sueldo del empleado

    public function mostrarDetalles(){ //Muestra los datos del empleado

        echo "Nombre: ".$this->nombre."\n".
        "Sueldo: ".$this->sueldo."\n";

    }
}

class Gerente extends Empleado{

    public $departamento; //Departamento del gerente

    public function mostrarDetalles(){ //Muestra los datos del gerente

        return "Nombre: ".$this->nombre."\n".
        "Sueldo: ".$this->sueldo."\n".
        "Departamento: ".$this->departamento."\n";

    }
}

$empleado = new Empleado();
$empleado->nombre = "Juan Perales";
$empleado->sueldo = 150.5;

$empleado->mostrarDetalles();

$gerente = new Gerente();
$gerente->nombre = "Agapito Morales";
$gerente->sueldo = 247.3;
$gerente->departamento = "Ventas";

echo $gerente->mostrarDetalles();

?>