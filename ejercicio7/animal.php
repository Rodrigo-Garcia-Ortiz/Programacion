<?php
class Animal{

    public $especie;

    public function emitirSonido(){

        if ($this->especie == "perro") {
    
            return "Guau Guau";
    
        } elseif ($this->especie == "gato") {
    
            return "Miau Miau";
        
        } else {
    
            return "Animal sin sonido específico";
    
        }
    }
}

class Perro extends Animal{

    public $raza;

    public function detalles(){

        return "Especie: ".$this->especie."."."\n".
        "Raza: ".$this->raza."."."\n";

    }
}

$perro = new Perro;
$perro->especie = "perro";
$perro->raza = "Bulldog";

echo $perro->detalles();
echo $perro->emitirSonido();
?>