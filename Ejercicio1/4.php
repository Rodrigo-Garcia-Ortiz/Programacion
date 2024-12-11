<?php 
error_reporting(E_ALL);
//error_reporting(0);

$x = rand(1, 10); //Genera un número aleatorio

do {

    $respuesta = readline("Introduzca su respuesta: "); 

    if ($respuesta < $x) { //Indica que la respuesta es un número mayor
        echo "Más alto"."\n";
    } elseif ($respuesta > $x) { //Indica que la respuesta es un número menor
        echo "Más bajo"."\n";
    }

} while ($respuesta != $x);

echo "Respuesta correcta"

?>