<?php
class CuentaBancaria{

    public $titular; //Titular de la cuenta
    public $saldo; //Saldo de la cuenta
    public $tipoDeCuenta; //Tipo de la cuenta

    public function depositar($cantidad){ //Ingresa dinero en la cuenta

        return $this->saldo = $this->saldo + $cantidad;

    }

    public function retirar($cantidad){ //Retira dinero de la cuenta

        if ($cantidad > $this->saldo){ //Comprueba si hay suficiente dinero para retirar

            throw new Exception("Saldo insuficiente");

        } else {
            
            return $this->saldo = $this->saldo - $cantidad;

        }
    }

    public function mostrarInfo(){ //Muestra los datos de la cuenta

        return "Titular: ".$this->titular."\n".
        "Saldo: ".$this->saldo."\n".
        "Tipo de cuenta: ".$this->tipoDeCuenta."\n";

    }
}

$cuenta = new CuentaBancaria();
$cuenta->titular = "Mariano Reyes";
$cuenta->saldo = 500;
$cuenta->tipoDeCuenta = "cuenta de ahorro";

do{
    $operacion = readline("Introduzca la operación deseada: ");

    try {
        
        if ($operacion == "depositar"){ //Ingresa dinero

            $cantidad = readline("Introduzca la cantidad a depositar: ");
            $cuenta->depositar($cantidad);
            echo "Operación completa"."\n";

        } elseif ($operacion == "retirar"){ //Retira dinero

            $cantidad = readline("Introduzca la cantidad a retirar: ");
            $cuenta->retirar($cantidad);
            echo "Operación completa"."\n";
        
        } elseif ($operacion == "info"){ //Muestra los datos de la cuenta

            echo $cuenta->mostrarInfo();

        } elseif ($operacion == "salir"){ //Cierra el programa

            break;

        } else { //Mensaje si no se escoge una opción válida

            echo "Operación inválida";

        }
    }

    catch(Exception $e) {

        echo "Saldo insuficiente"."\n";

    }
} while ($operacion != "salir");

?>