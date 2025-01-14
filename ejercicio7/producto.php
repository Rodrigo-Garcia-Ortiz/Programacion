<?php
class Producto{

    public $nombre;
    public $precio;

    public function mostrarDetalles(){

        return "Nombre: ".$this->nombre."."."\n".
        "Precio: ".$this->precio."."."\n";

    }
}

class Electrodomestico extends Producto{

    public $consumo;

    public function mostrarDetalles(){

        return "Nombre: ".$this->nombre."."."\n".
        "Precio: ".$this->precio."."."\n".
        "Consumo: ".$this->consumo."."."\n";

    }
}

$electrodomestico = new Electrodomestico;
$electrodomestico->nombre = "tostadora";
$electrodomestico->precio = "153.12 €";
$electrodomestico->consumo = "132 Kw/h";

echo $electrodomestico->mostrarDetalles();

?>