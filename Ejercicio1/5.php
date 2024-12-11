<?php 
error_reporting(E_ALL);
//error_reporting(0);

$altura = readline("Intrduzca la altura de la pirámide: ");
$ancho = 1;

for ($y = 1; $y <= $altura; $y++) {

    for ($x = 1; $x <= $ancho; $x++) {
        echo "1"."\n";
    }
    $ancho++;

}

?>