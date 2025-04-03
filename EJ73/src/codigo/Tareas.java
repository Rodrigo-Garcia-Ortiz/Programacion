package codigo;
import java.util.ArrayList;
import java.util.Scanner;

public class Tareas {
	
	Scanner obj = new Scanner(System.in); //Inicializa un objeto Scanner

	ArrayList<String> tareas = new ArrayList<>();
	
	public void agregarTarea() { //Añade una tarea a la lista
		
		System.out.println("Añade una tarea: ");
		
		String tarea = obj.nextLine(); //Recoge la tarea indicada por el usuario
		
		tareas.add(tarea);
		System.out.println("Tarea " + tarea + " añadida");
		System.out.println();

	}
	
    public void eliminarTarea() { //Elimina una tarea
		
    	System.out.println("Elimina una tarea: ");
    
		String tarea = obj.nextLine(); //Recoge la tarea indicada por el usuario
		
		tareas.remove(tarea);
		System.out.println("Tarea " + tarea + " eliminada");
		System.out.println();

	}
    
    public void mostrarTareas() { //Muestra las tareas
    	
    	System.out.println("Tareas: ");
		
		for (int x = 0; x < tareas.size(); x++) {
			
			System.out.println(tareas.get(x));
		}
	}
}
