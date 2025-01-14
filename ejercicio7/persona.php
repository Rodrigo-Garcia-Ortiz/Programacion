<?php
class Persona{

    public $nombre;
    public $edad;
    public $genero;

    public function presentar(){

        return "Nombre: ".$this->nombre."."."\n".
        "Edad: ".$this->edad."."."\n".
        "Género: ".$this->genero."."."\n";

    }
}

$persona = new Persona();
$persona->nombre = "Juan Ramírez";
$persona->edad = 25;
$persona->genero = "Hombre";

echo $persona->presentar();

?>