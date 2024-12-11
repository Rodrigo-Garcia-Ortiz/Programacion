<?php 
error_reporting(E_ALL);
//error_reporting(0);

$contador = 0;
$patron1 = "/[[:alnum:]]{8,}/";
$patron2 = "/[[:digit:]]/";
$patron3 = "/[a-z]/";
$patron4 = "/[A-Z]/";
$clave = readline("Introduzca la contraseña: ");

if (preg_match($patron1, $clave)) { // Comprueba el número de caractéres de la contraseña

    echo("La contraseña tiene 8 o más caractéres")."\n";
    $contador++;

} else {

    echo("La contraseña tiene menos de 8 caractéres")."\n";

}

if (preg_match($patron2, $clave)) { // Comprueba si lacontraseña incluye números

    echo("La contraseña contiene números")."\n"; 
    $contador++;
    
} else {

    echo("La contraseña no contiene números")."\n";

}

if (preg_match($patron3, $clave)) { // Comprueba si lacontraseña incluye minúsculas

    echo("La contraseña contiene minúsculas")."\n";
    $contador++;
    
} else {

    echo("La contraseña no contiene minúsculas")."\n";

}

if (preg_match($patron4, $clave)) { // Comprueba si lacontraseña incluye mayúsculas

    echo("La contraseña contiene mayúsculas")."\n";
    $contador++;
    
} else {

    echo("La contraseña no contiene mayúsculas")."\n";

}

if ($contador == 4) { // Indica si la contraseña cumple todas las condiciones

    echo ("La contraseña es válida");

} else {

    echo ("La contraseña no es válida");
}

?>