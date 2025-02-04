<?php
class Tarea{

    public $nombre; //Nombre de la tarea
    public $descripcion; //Descripción de la tarea
    public $fechaLimite; //Fecha límite de la tarea
    public $estado; //Estado de la tarea

    public function marcarComoCompletada(){ //Marca la tarea como completada

        return $this->estado = "completada";

    }

    public function editarDescripcion($nuevaDescripcion){ //Cambia la descripción de la tarea

        return $this->descripcion = $nuevaDescripcion;

    }

    public function mostrarTarea(){ //Muestra los datos de la tarea

        return "Nombre: ".$this->nombre."\n".
        "Descripción: ".$this->descripcion."\n".
        "Fecha límite: ".$this->fechaLimite."\n".
        "Estado: ".$this->estado."\n";

    }
}

$tarea1 = new Tarea;
$tarea1->nombre = "Tarea 1";
$tarea1->descripcion = "Primera tarea";
$tarea1->fechaLimite = "16/1/2025";
$tarea1->estado = "incompleto";

$tarea2 = new Tarea;
$tarea2->nombre = "Tarea 2";
$tarea2->descripcion = "Segunda tarea";
$tarea2->fechaLimite = "17/1/2025";
$tarea2->estado = "incompleto";

$tarea3 = new Tarea;
$tarea3->nombre = "Tarea 3";
$tarea3->descripcion = "Tercera tarea";
$tarea3->fechaLimite = "18/1/2025";
$tarea3->estado = "incompleto";

$tareas = array(1=>$tarea1, 2=>$tarea2, 3=>$tarea3);

do{
    $tarea = readline("Elija la tarea: "); //Escoge con que tarea interactuar

    do{
        $opcion = readline("Escoja que hacer con la tarea: "); //Escoge una opción
        
        if ($opcion == "Completar"){

            $tareas[$tarea]->marcarComoCompletada();
            echo "Tarea completada"."\n";
    
        } elseif ($opcion == "editar"){
    
            $nuevaDescripcion = readline("Introduzca la nueva descripción: ");
            $tareas[$tarea]->editarDescripcion($nuevaDescripcion);
            echo "Descripción editada"."\n";
    
        } elseif ($opcion == "mostrar"){
    
            echo $tareas[$tarea]->mostrarTarea();

        } elseif ($opcion == "salir"){

            break;

        } else{

            echo "Opción inválida"."\n";

        }
    } while ($opcion != "salir"); //Permite cambiar de tarea al introducir salir
} while ($tarea != "salir") //Cierra la aplicacion al introducir salir al elegir tarea
?>