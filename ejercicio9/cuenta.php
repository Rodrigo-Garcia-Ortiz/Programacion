<?php
class CuentaBancaria{

    private $titular; //Titular de la cuenta
    private $saldo; //Saldo de la cuenta
    private $tipoCuenta; //Tipo de cuenta

    public function __construct($titular, $tipoCuenta){ //Introduce los datos iniciales de la cuenta

        $this->titular = $titular;
        $this->tipoCuenta = $tipoCuenta;
        $this->saldo = 0;

    }

    public function depositar($cantidad){ //Ingresa dinero en la cuenta

        $this->saldo = $this->saldo + $cantidad;
        return "Cantidad ingresada correctamente";

    }

    public function retirar($cantidad){ //Retira dinero de la cuenta

        if ($this->verificarSaldoSuficiente($cantidad) == false){ //Comprueba si hay saldo suficiente

            return "Saldo insuficiente";

        } else{

            $this->saldo = $this->saldo - $cantidad;
            return "Cantidad retirada correctamente";

        }
    }

    private function verificarSaldoSuficiente($cantidad){ //Comprueba si hay saldo suficiente

        if ($this->saldo < $cantidad){

            return false;

        } else{

            return true;

        }
    }

    public function getSaldo(){ //Devuelve el saldo actual

        return  $this->saldo."\n";
    }
}

$cuenta = new CuentaBancaria("Antonio Perales", "corriente");

do{

    $opcion = readline("Seleccione la opción deseada: "); //Permite escoger que hacer con la cuenta

    if ($opcion == "ingresar"){ //Ingresar dinero en la cuenta

        $cantidad = readline("Introduzca la cantidad a depositar: ");
        echo $cuenta->depositar($cantidad)."\n";

    } elseif ($opcion == "retirar"){ //Retirar dinero de la cuenta

        $cantidad = readline("Introduzca la cantidad a retirar: ");
        echo $cuenta->retirar($cantidad)."\n";

    } elseif ($opcion == "salir"){ //Salir

        break;

    } else{

        echo "Opción inválida"."\n"; //No se introduce una opción válida
    }
} while ($opcion != "salir"); //Repetir hasta que se introduzca salir

echo "Saldo final: ".$cuenta->getSaldo();

?>