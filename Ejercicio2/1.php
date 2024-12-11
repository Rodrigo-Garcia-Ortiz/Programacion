<?php 
error_reporting(E_ALL);
//error_reporting(0);

$contador = 0;
$frase = readline("Introduzca la  cadena de texto: ");

for ($i = 0; $i < strlen($frase); $i++) { // Cuenta cuantos espacios hay en la cadena de texto
    switch($frase[$i]) {

        case " ": $contador++;
        break;

        default:
        break;
    }
}

$contador++;

echo ("La cadena de texto tiene $contador palabras") // Indica cuantas palabras hay en la cadena de texto

?>