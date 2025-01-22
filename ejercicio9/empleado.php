<?php
class Empleado{

    private $nombre; //Nombre del empleado
    private $sueldo; //Sueldo del empleado
    private $puesto; //Puesto del empleado
    
    public function __construct($nombre, $sueldo, $puesto){ //Inicializa los datos del empleado

        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->puesto = $puesto; 

    }

    public function setSueldo($nuevoSueldo){ //Actualiza el sueldo del empleado

        $this->sueldo = $nuevoSueldo;

    }

    public function getSueldo(){ //Devuelve el sueldo del empleado

        return "Sueldo: ".$this->sueldo."\n";

    }

    public function getNombre(){ //Devuelve el nombre del empleado

        return $this->nombre."\n";

    }

    public function getPuesto(){ //Devuelve el puesto del empleado

        return $this->puesto."\n";

    }
}

class Manager extends Empleado{

    private $departamento; //Departamento del manager

    public function __construct($nombre, $sueldo, $puesto, $departamento){ //Inicializa los datos del manager

        parent::__construct($nombre, $sueldo, $puesto);
        $this->departamento = $departamento;

    }

    public function revisarEmpleado($empleado){ //Devuelve los datos del empleado asignado

        return "Nombre: ".$empleado->getNombre().
        "Puesto: ".$empleado->getPuesto();

    }
}

$manager = new Manager("Juan Pérez", 1900, "Manager", "Ventas");
$empleado = new Empleado("Manolo Suarez", 1500, "Vendedor");
echo $manager->revisarEmpleado($empleado)

?>