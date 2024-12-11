<?php 
error_reporting(E_ALL);
//error_reporting(0);

do {
    $x = readline("Introduzca el primer número: ");
    $y = readline("Introduzca el segundo número: ");
    
    $opcion = readline("Elija una operación: ");
    
    if ($opcion == 1) { //Hace una suma
        $resultado = $x + $y;
        echo $resultado."\n";

    } elseif ($opcion == 2) { //Hace una resta
        $resultado = $x - $y;
        echo $resultado."\n";

    } elseif ($opcion == 3) { //Hace una multiplicación
        $resultado = $x * $y;
        echo $resultado."\n";

    } elseif ($opcion == 4) { //Hace una división
        $resultado = $x / $y;
        echo $resultado."\n";

    } elseif ($opcion == 5) {

    } else {
        echo "Opción no válida";
    }
} while ($opcion != 5); // Introducir 5 termina el programa

?>