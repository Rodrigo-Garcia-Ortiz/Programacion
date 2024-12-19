<?php
require_once "../modelo/funciones.php";

$archivo = "../datos/clientes.csv";
$id = $_POST["id"] ?? null;

if ($id !== null) { //Guarda todos los clientes salvo el indicado
    $clientes = leerClientes($archivo);
    $clientesActualizados = array_filter($clientes, function($cliente) use ($id) {
        return $cliente[0] != $id;
    });
    escribirClientes($archivo, $clientesActualizados); //Sobreescribe el archivo de texto
    echo "<h1>Cliente eliminado con éxito</h1>";
    echo "<a href='../index.php'>Volver al listado</a>";
} else {
    echo "Error: No se recibió un ID válido.";
}
?>