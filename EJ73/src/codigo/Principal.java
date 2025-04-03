package codigo;
public class Principal {

	public static void main(String[] args) {
		
		Tareas tareas = new Tareas();
		
		tareas.agregarTarea(); //Añade una tarea a la lista
		tareas.agregarTarea(); //Añade una tarea a la lista
		tareas.agregarTarea(); //Añade una tarea a la lista
		
		tareas.eliminarTarea(); //Elimina una tarea
		
		tareas.mostrarTareas(); //Muestra las tareas
	}
}
