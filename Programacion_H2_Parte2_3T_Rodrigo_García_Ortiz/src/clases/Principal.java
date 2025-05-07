package clases;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Principal {
	
	static String saltoDeLinea;

	public static void main(String[] args) {
		
        Funciones f = new Funciones();
		
		Scanner obj = new Scanner(System.in);
		
		try { //Comprueba si el tipo de dato introducido es el adecuado
			
			do { //Crea un bucle hasta que el usuario escoja la opción de salir
				
				System.out.println("1 – Ver películas");
				System.out.println("2 – Añadir película");
				System.out.println("3 – Eliminar película");
				System.out.println("4 – Modificar película");
				System.out.println("5 – Salir");
				System.out.println();
					
				System.out.println("Escoja una opción: ");
				int opcion = obj.nextInt();
				System.out.println();
					
				if (opcion == 1) { //Muestra las películas registradas
						
					f.verPeliculas();
						
				} else if (opcion == 2) { //Registra una nueva película
					
					System.out.println("Introduzca el id de la película: ");
					int id = obj.nextInt();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduzca el titulo de la película: ");
					String titulo = obj.nextLine();
					System.out.println();
					
					System.out.println("Introduzca el id de la categoría de la película: ");
					int categoria = obj.nextInt();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduzca el nombre del director de la película: ");
					String director = obj.nextLine();
					System.out.println();
					
					System.out.println("Introduzca el año de publicación de la película: ");
					int publicacion = obj.nextInt();
					System.out.println();
					
					f.registrarPelicula(id, titulo, categoria, director, publicacion);
					
				}else if (opcion == 3) { //Elimina la película indicada
					
					System.out.println("Introduzca el id de la película: ");
					int id = obj.nextInt();
					System.out.println();
					
					f.eliminarPelicula(id);
					
				}else if (opcion == 4) { //Modifica los datos de la película indicada
					
					System.out.println("Introduzca el id de la película a modificar: ");
					int id = obj.nextInt();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduzca el nuevo titulo de la película: ");
					String titulo = obj.nextLine();
					System.out.println();
					
					System.out.println("Introduzca el nuevo id de la categoría de la película: ");
					int categoria = obj.nextInt();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduzca el nuevo nombre del director de la película: ");
					String director = obj.nextLine();
					System.out.println();
					
					System.out.println("Introduzca el nuevo año de publicación de la película: ");
					int publicacion = obj.nextInt();
					System.out.println();
					
					f.modificarPelicula(id, titulo, categoria, director, publicacion);								
					
				} else if (opcion == 5) { //Sale del programa
						
					System.out.println("Saliendo del programa");
					break;
						
				} else {
						
					System.out.println("Opción no válida");
					System.out.println();
						
				}	
				
			} while (true);
			
		} catch (InputMismatchException e) { //Indica que se ha introducido un tipo de dato erróneo
			
			System.out.println("Tipo de dato erróneo");
			
		}
		
		obj.close();  
	}

}
