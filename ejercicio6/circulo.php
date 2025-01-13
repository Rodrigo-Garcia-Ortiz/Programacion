<?php
class Circulo{

    public $radio; // Radio del círculo

    public function calcularArea(){ // Calcula el área del círculo

        return "Área: ".(($this->radio)*($this->radio))*3.14;

    }
}

$circulo = new Circulo();
$circulo->radio = 5;

echo $circulo->calcularArea();

?>