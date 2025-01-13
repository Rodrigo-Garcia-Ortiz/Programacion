<?php
class Libro{

    public $titulo; // Título del libro
    public $autor; // Autor del libro
    public $numero_paginas; // Numero de páginas del libro

    public function mostrarInfo(){ //Muestra los datos del libro

        return "Título: ".$this->titulo."\n".
        "Autor: ".$this->autor."\n".
        "Número de páginas: ".$this->numero_paginas."\n";

    }
}

$libro = new Libro();
$libro->titulo = "Viento y verdad";
$libro->autor = "Brandon Sanderson";
$libro->numero_paginas = "1406";

echo $libro->mostrarInfo();

?>