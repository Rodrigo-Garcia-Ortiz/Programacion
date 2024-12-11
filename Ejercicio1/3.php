<?php 
error_reporting(E_ALL);
//error_reporting(0);

$x = readline("Introduzca el número: ");
$primo = true;

for ($n = 2; $n < ($x/2); $n++) { //Comprueba si el número es divisible por cualquier número entre el 2 y su mitad
    if ($x % $n == 0) { 
        $primo = false;
    }
}

if ($primo == true) {
    echo "Es primo";
} elseif($primo == false) {
    echo "No es primo";
}

?>