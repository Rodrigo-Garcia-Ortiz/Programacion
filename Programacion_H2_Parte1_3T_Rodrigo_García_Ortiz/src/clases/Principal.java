package clases;

import java.util.Scanner;

public class Principal {

	public static void main(String[] args) {
		
		Funciones f = new Funciones();
		
		Scanner obj = new Scanner(System.in);
		
		do { //Crea un bucle hasta que el usuario escoja la opción de salir
			
			System.out.println("1 – Ver películas");
			System.out.println("2 – Salir");
			System.out.println();
				
			System.out.println("Escoja una opción: ");
			int opcion = obj.nextInt();
			System.out.println();
				
			if (opcion == 1) { //Muestra las películas registradas
					
				f.verPeliculas();
					
			} else if (opcion == 2) { //Sale del programa
					
				break;
					
			} else {
					
				System.out.println("Opción no válida");
				System.out.println();
					
			}	
			
		} while (true);
		
		obj.close();  

		System.out.println("Saliendo del programa");
	}
}
