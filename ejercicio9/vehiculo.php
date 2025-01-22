<?php
class Vehiculo{

    private $marca; //Marca del vehículo
    private $modelo; //Modelo del vehículo

    public function __construct($marca, $modelo){ //Inicializa los datos del vehículo

        $this->marca = $marca;
        $this->modelo = $modelo; 

    }

    public function encender(){ //Indica que el vehículo esta encendido

        return "El vehículo esta encendido"."\n";

    }

    public function getMarca(){ //Devuelve la marca del vehículo

        return $this->marca;

    }

    public function getModelo(){ //Devuelve el modelo del vehículo

        return $this->modelo;
        
    }
}

class Coche extends Vehiculo{

    private $combustible; //Tipo de combustible del coche

    public function __construct($marca, $modelo, $combustible){ //Inicializa los datos del coche

        parent::__construct($marca, $modelo);
        $this->combustible = $combustible;

    }

    public function mostrarDetalles(){ //Muestra los datos del coche

        return "Marca: ".$this->getMarca()."\n".
        "Modelo: ".$this->getModelo()."\n".
        "Combustible: ".$this->combustible."\n";

    }
}

$coche = new Coche("Toyota", "Corola", "Gasolina");
echo $coche->encender();
echo $coche->mostrarDetalles();

?>