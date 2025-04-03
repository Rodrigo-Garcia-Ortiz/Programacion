package codigo;

import java.util.ArrayList;
import java.util.Collections;

public class Numeros {
	
	static ArrayList<Integer> numeros = new ArrayList<>();

	public static void crearLista() { //Guarda números en una lista
		
		numeros.add(5);
		numeros.add(7);
		numeros.add(8);
		numeros.add(2);
		numeros.add(1);
		numeros.add(4);
		
		System.out.println("Lista desordenada: ");
		System.out.println(numeros);
		System.out.println("");
	}
	
	public static void ordenarLista() { //Ordena la lista
		
		Collections.sort(numeros);
		
		System.out.println("Lista ordenada: ");
		System.out.println(numeros);
		
	}
}
