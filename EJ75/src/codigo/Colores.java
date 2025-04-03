package codigo;

import java.util.HashSet;
import java.util.Scanner;

public class Colores {

	static HashSet<String> colores = new HashSet<>();
	static Scanner obj = new Scanner(System.in); //Inicializa un objeto Scanner
	
	
	public static void añadirColor() { //Guarda colores en el HashSet

	    System.out.println("Introduce un color: ");
		String color = obj.nextLine();
		colores.add(color);
		
		System.out.println("");
				
	}
	
	public static void verCantidadColores() { //Muestra cuantos colores hay en el HashSet
		
		System.out.println("Número de colores: " + colores.size());
	}
}
