<?php
class Personaje{

    public $nombre; //Nombre del personaje
    public $nivel; //Nivel del personaje
    public $puntosVida; //Vida del personaje
    public $puntosAtaque; //Ataque del personaje

    public function atacar(Personaje $objetivo){ //Dos personajes pelean

        $objetivo->puntosVida = $objetivo->puntosVida - $this->puntosAtaque;
        return $objetivo->nombre." ha sufrido ".$this->puntosAtaque." puntos de daño"."\n";
    }

    public function curarse(){ //El personaje se cura

        $this->puntosVida = $this->puntosVida + 2 * $this->nivel;
        return $this->nombre." ha recuperado ".(2 * $this->nivel)." puntos de vida"."\n";

    }

    public function subirNivel(){ //El personaje sube de nivel

        $this->nivel =$this->nivel + 1;
        $this->puntosAtaque = $this->puntosAtaque + 2;
        $this->puntosVida = $this->puntosVida + 2;
        echo $this->nombre." ha subido al nivel ".$this->nivel."\n";
        echo "El ataque de ".$this->nombre." ha aumentado en 2"."\n";
        echo "La vida de ".$this->nombre." ha aumentado en 2"."\n";

    }
}

$personaje1 = new Personaje;
$personaje1->nombre = "Ringabel";
$personaje1->nivel = 1;
$personaje1->puntosVida = 4;
$personaje1->puntosAtaque = 7;

$personaje2 = new Personaje;
$personaje2->nombre = "Erdrick";
$personaje2->nivel = 1;
$personaje2->puntosVida = 8;
$personaje2->puntosAtaque = 3;

$personaje3 = new Personaje;
$personaje3->nombre = "Cloud";
$personaje3->nivel = 1;
$personaje3->puntosVida = 5;
$personaje3->puntosAtaque = 5;

$personajes = array($personaje1, $personaje2, $personaje3);

$jugador = readline("Elija que personaje quiere controlar: ");

$objetivo = $personajes[]
?>