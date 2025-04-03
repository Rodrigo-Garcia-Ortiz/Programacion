package codigo;

import java.util.HashMap;
import java.util.Scanner;

public class Edad {
	
	static HashMap<String, Integer> edades = new HashMap<>();
	
	public static void crearHashMap() { //Guarda datos en un HashMap
		
		edades.put("Juan", 27);
		edades.put("María", 32);
		edades.put("Luisa", 16);
	}
	
	public static void buscarEdad() { //Muestra la edad de la persona introducida
		
		Scanner obj = new Scanner(System.in); //Inicializa un objeto Scanner
		System.out.println("Introduce un nombre: ");
		String nombre = obj.nextLine(); //Recoge el nombre indicado por el usuario
		
		System.out.println("Edad de " + nombre + ": " +edades.get(nombre));
		
		obj.close();
	}
}
