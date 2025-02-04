<?php
class Carrito{

    public $productos; //Productos del carrito

    public function agregarProducto($nombre, $precio, $cantidad){ //Añade productos al carrito

        $producto = array("nombre"=>$nombre, "precio"=>$precio, "cantidad"=>$cantidad);
        return array_push($this->productos, $producto);


    }

    public function quitarProducto($nombre){ //Quita productos del carrito

        for ($x = 0; $x <= count($this->productos); $x++){

            $producto = $this->productos[$x];

            if ($producto["nombre"] == $nombre) {

                unset($this->productos[$x]);

            }
        }
    }

    public function calcularTotal(){ //Calcula el precio total de la compra

        $precioTotal = 0;
        for ($x = 0; $x <= count($this->productos); $x++){

            $producto = $this->productos[$x];
            $precioProducto = $producto["precio"]*$producto["cantidad"];
            $precioTotal = $precioTotal + $precioProducto;

        }

        return $precioTotal;

    }

    public function mostrarDetalleCarrito(){ //Muestra los datos del carrito

        for ($x = 0; $x <= count($this->productos); $x++){

            $producto = $this->productos[$x];

            echo "Producto: ".$producto["nombre"]."\n".
            "Precio: ".$producto["precio"]."\n".
            "Cantidad: ".$producto["cantidad"]."\n";

        }
    }
}

$carrito = new Carrito;
$carrito->productos = array();

do{

    $opcion = readline("Elija una opción: ");

    if ($opcion == "añadir"){

        $nombre = readline("Introduzca el nombre del producto a añadir: ");
        $precio = readline("Introduzca el precio del producto a añadir: ");
        $cantidad = readline("Introduzca la cantidad del producto a añadir: ");
        
        $carrito->agregarProducto($nombre, $precio, $cantidad);
        echo "Producto añadido correctamente"."\n";

    } elseif ($opcion == "quitar"){

        $nombre = readline("Introduzca el nombre del producto a eliminar: ");

        $carrito->quitarProducto($nombre);
        echo "Producto eliminado correctamente"."\n";

    } elseif ($opcion == "total"){

        echo "Precio total: ".$carrito->calcularTotal()." €"."\n";

    } elseif ($opcion == "detalles"){

        echo $carrito->mostrarDetalleCarrito()."\n";

    } elseif ($opcion == "salir"){

        break;

    } else{

        echo "Opción no válida"."\n";

    }
} while ($opcion != "salir")
?>