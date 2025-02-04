<?php
class Empleado{

    public $nombre; //Nombre del empleado
    public $sueldo; //Sueldo del empleado
    public $aniosExperiencia; //Años trabajados del empleado

    public function calcularBonus(){ //Calcula el bonus del empleado

        return "Bonus del empleado: ".($this->sueldo*5/100)*($this->aniosExperiencia/2)."€"."\n";

    }

    public function mostrarDetalles(){ //Muestra datos del empleado

        return "Nombre: ".$this->nombre."\n".
        "Sueldo: ".$this->sueldo."\n".
        "Años de experiencia: ".$this->aniosExperiencia."\n";

    }
}

class Consultor extends Empleado{

    public $horasPorProyecto; //Horas ue dura cada proyecto

    public function calcularBonus(){ //Calcula el bonus del consultor

        if ($this->horasPorProyecto > 100){

            return "Bonus del consultor: ".(($this->sueldo*5/100)*($this->aniosExperiencia/2)*2)."€"."\n";
        } else{

            return "Bonus del consultor: ".($this->sueldo*5/100)*($this->aniosExperiencia/2)."€"."\n";

        } 
    }
}

$empleado = new Empleado;
$empleado->nombre = "Manuel Pérez";
$empleado->sueldo = 1500;
$empleado->aniosExperiencia = 15;

$consultor = new Consultor;
$consultor->nombre = "Antonio Perales";
$consultor->sueldo = 1900;
$consultor->aniosExperiencia = 20;
$consultor->horasPorProyecto = 300;

echo $empleado->calcularBonus();
echo $consultor->calcularBonus();

if ($empleado->calcularBonus() == $consultor->calcularBonus()){

    echo $empleado->nombre." y ".$consultor->nombre." tienen el mismo bonus"."\n";

} elseif ($empleado->calcularBonus() > $consultor->calcularBonus()){

    echo "El bonus de ".$empleado->nombre." es mayor que el de ".$consultor->nombre."\n";
    
} else{

    echo "El bonus de ".$consultor->nombre." es mayor que el de ".$empleado->nombre."\n";
}
?>