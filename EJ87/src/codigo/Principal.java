package codigo;

import java.util.ArrayList;

public class Principal {

	public static void main(String[] args) {
		
		TareaSimple t1 = new TareaSimple("Limpiar", 1);
		TareaSimple t2 = new TareaSimple("Colada", 2);
		TareaSimple t3 = new TareaSimple("Comprar", 3);
		
		ArrayList<Tarea> tareas = new ArrayList();
		tareas.add(t1);
		tareas.add(t2);
		tareas.add(t3);
		
		for (int x = 0; x < tareas.size(); x++) {
			
			tareas.get(x).ejecutar();
		}
	}
}
