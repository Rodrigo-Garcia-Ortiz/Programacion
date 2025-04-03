package codigo;

import java.util.ArrayList;

public class Nombres {

	static ArrayList<String> nombres = new ArrayList<>();
	
	public static void añadirNombres() { //Crea una lista de nombres
		
		nombres.add("Juan");
		nombres.add("Luis");
		nombres.add("María");
		nombres.add("Antonio");
		
	}
	
	public static void mostrarNombres() { //Muestra los nombres de la lista en mayúsculas
		
		for (String nombre : nombres) {
			
			System.out.println(nombre.toUpperCase());
		}
	}	
}
