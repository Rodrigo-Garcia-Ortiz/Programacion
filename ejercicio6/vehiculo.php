<?php
class Vehiculo{

    public $marca; // Marca del vehículo

    public function encender(){ //Indica que el vehículo esta encendido

        return "El vehículo esta encendido"."\n";

    }
}

class Coche extends Vehiculo{

    public $modelo; //Modelo del coche

}

$coche = new Coche();
$coche->marca = "Citroen";
$coche->modelo = "D-45";

echo $coche->encender();

?>