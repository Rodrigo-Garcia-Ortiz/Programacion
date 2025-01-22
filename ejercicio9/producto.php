<?php
class Producto{

    private $nombre; //Nombre del producto
    private $precio; //Precio del producto
    private $cantidad; //Cantidad del producto

    public function __construct($nombre, $precio, $cantidad){ //Inicializa los datos del producto

        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;

    }

    public function getNombre(){ //Devuelve el nombre del producto

        return $this->nombre."\n";

    }
    public function getPrecio(){ //Devuelve el precio del producto

        return $this->precio."\n";

    }
    public function getCantidad(){ //Devuelve la cantidad del producto

        return $this->cantidad."\n";


    }
}

class ProductoImportado extends Producto{

    private $impuestoAdicional; //Impuesto extra del producto importado

    public function __construct($nombre, $precio, $cantidad, $impuestoAdicional){ //Inicializa los datos del producto

        parent::__construct($nombre, $precio, $cantidad);
        $this->impuestoAdicional = $impuestoAdicional;

    }

    public function calcularPrecioFinal(){ //Calcula el precio total del producto

        $precio = $this->getPrecio();
        return "Precio final: ".$precio + $this->impuestoAdicional;
    }
}

$producto = new Producto("pan", 3, 2);
echo $producto->getNombre();
echo $producto->getPrecio();
echo $producto->getCantidad();

$productoImportado = new ProductoImportado("azúcar", 6, 1, 5);
echo $productoImportado->getNombre();
echo $productoImportado->getPrecio();
echo $productoImportado->getCantidad();
echo $productoImportado->calcularPrecioFinal();
?>