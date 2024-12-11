<?php 
error_reporting(E_ALL);
//error_reporting(0);

$array = array();

$numero_valores = 5; // Indica la cantidad de valores que tendrá el array

for ($x = 0; $x < $numero_valores; $x++) { // Introduce valores aleatorios en el array

    $numero_aleatorio = rand(1,100);
    array_push($array,$numero_aleatorio);
}

echo("-Array desordenado")."\n"; // Muestra el array desordenado
for ($x = 0; $x < count($array); $x++) { 
    echo $array[$x]."\n";

}

for ($y = 0; $y < count($array); $y++) { // Ordena el array

    for ($z = 0; $z < count($array); $z++) {

        if ($array[$z] > $array[$y]) { // Si uno de los números es mayor que otro intercambian sus posiciones
            $puente = $array[$z];
            $array[$z] = $array[$y];
            $array[$y] = $puente;
        }
    }
}

echo("-Array ordenado")."\n"; // Muestra el array ordenado
for ($x = 0; $x < count($array); $x++) { 

    echo $array[$x]."\n";

}

?>