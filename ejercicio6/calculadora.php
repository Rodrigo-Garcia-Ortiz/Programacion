<?php
class Calculadora{

    public function sumar($atributo1, $atributo2){ //Hace una suma

        return $atributo1 + $atributo2;

    }

    public function restar($atributo1, $atributo2){ //Hace una resta

        return $atributo1 - $atributo2;

    }

    public function multiplicar($atributo1, $atributo2){ //Hace una multiplicación

        return $atributo1 * $atributo2;

    }

    public function dividir($atributo1, $atributo2){ //Hace una división

        if ($atributo2 == 0) { //Comprueba si la división es posible

            throw new Exception("No se puede dividir entre 0");

        } else {

        return $atributo1 / $atributo2;

        }
    }
}

$operacion = new Calculadora();

do { //Permite operar hasta que se introduca 0 en el operador

    $atributo1 = readline("Introduzca el primer número: "); //Primer número de la operación
    $atributo2 = readline("Introduzca el segundo número: "); //Segundo número de la operación
    $operador = readline("Introduzca el operador: "); //Operador de la operación 

    try {

        if ($operador == "+"){
    
            echo "Resultado: ".$operacion->sumar($atributo1, $atributo2)."\n";
        
        } elseif ($operador == "-"){
        
            echo "Resultado: ".$operacion->restar($atributo1, $atributo2)."\n";
        
        } elseif ($operador == "*"){
        
            echo "Resultado: ".$operacion->multiplicar($atributo1, $atributo2)."\n";
        
        } elseif ($operador == "/"){
            
            echo "Resultado: ".$operacion->dividir($atributo1, $atributo2)."\n";
        
        } elseif ($operador == 0){
            
        }else { //Mensaje que sale si no se introduce un operador válido
        
            echo "Operación no válida"."\n";
        
        }
    }

    catch (Exception $e) { //Mensaje que sale si se intenta dividir entre 0

        echo "División imposible"."\n";
    
    }
} while ($operador != 0)

?>