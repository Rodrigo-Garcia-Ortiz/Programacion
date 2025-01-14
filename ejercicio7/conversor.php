<?php
class ConversorMoneda{

    public function convertirEurosADolares($cantidad){

        return $cantidad * 0.98."$";

    }

    public function convertirDolaresAEuros($cantidad){

        return $cantidad / 0.98."€";

    }
}

do {

    $conversion = new ConversorMoneda();

    $cantidad = readline("Introduzca la cantidad de dinero: ");
    $tipo = readline("Introduzca el tipo de divisa: ");
    
    if ($tipo == "€"){
    
        echo "Cantidad en dólares: ".$conversion->convertirEurosADolares($cantidad)."\n";
    
    } elseif ($tipo == "$"){
    
        echo "Cantidad en euros: ".$conversion->convertirDolaresAEuros($cantidad)."\n";
    
    } else {
    
        echo "Tipo de divisa no válida"."\n";
    
    }
} while ($tipo != 0)

?>