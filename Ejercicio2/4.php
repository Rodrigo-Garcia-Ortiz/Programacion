<?php 
error_reporting(E_ALL);
//error_reporting(0);

$nombres = array( //Posibles nombres
    1 => "Juan ", 
    2 => "Raúl ", 
    3 => "María ",
    4 => "David ", 
    5 =>"Luna ",
);

$apellidos = array( //Posibles apellidos
    1 => "Peréz ", 
    2 => "Morales ", 
    3 => "Casas ", 
    4 => "García ", 
    5 => "Guijo ",
);

$nombre_random = rand(1, count($nombres)); //Elije uno de los nombres al azar
$apellido_random = rand(1, count($apellidos)); //Elije uno de los apellidos al azar

echo("-Nombres: ")."\n";
for ($x = 1; $x <= count($nombres); $x++) { //Imprime los nombres

    echo $nombres[$x]."\n";

}

echo("-Apellidos: ")."\n";
for ($x = 1; $x <= count($apellidos); $x++) { //Imprime los apellidos

    echo $apellidos[$x]."\n";

}

echo("-Nombre aleatorio:")."\n";
$nombre_completo = $nombres[$nombre_random] . $apellidos[$apellido_random]; // Crea el nombrecompleto

echo $nombre_completo //Imprime el nombre completo
?>