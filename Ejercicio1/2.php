<?php 
error_reporting(E_ALL);
//error_reporting(0);

$x = readline("Introduzca el número a multiplicar: ");

for ($n = 1; $n <= 10; $n++) { //Muestra los múltiplos del número del 1 hasta el 10
    $resultado = $x*$n;
    echo $resultado."\n";
}
?>