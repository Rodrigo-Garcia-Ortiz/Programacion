package vista;

import java.util.InputMismatchException;
import java.util.Scanner;

import controlador.ControladorArticulo;

public class VistaArticulo {

	static String saltoDeLinea;
	
	public void menuArticulo() { // Muestra las opciones de Crud de la tabla articulos
		
	       Scanner obj = new Scanner(System.in);
	       ControladorArticulo c = new ControladorArticulo();
			
			do {
				
				try {
					
					System.out.println("1. Registrar artículo");
					System.out.println("2. Listar artículos");
					System.out.println("3. Modificar artículo");
					System.out.println("4. Eliminar artículo");
					System.out.println("5. Salir");
					System.out.println();
					
					System.out.println("Escoje una opción:");
					int opcion = obj.nextInt();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					if (opcion == 1) { //Registra un nuevo artículo
						
						System.out.println("Introduce el nombre del artículo:");
						String nombre = obj.nextLine();
						System.out.println();
						
						System.out.println("Introduce el precio del artículo:");
						Double precio = obj.nextDouble();
						System.out.println();
						
						System.out.println("Introduce el stock del artículo:");
						int stock = obj.nextInt();
						System.out.println();
						
						c.registrarArticulo(nombre, precio, stock);
						
					} else if (opcion == 2) { //Muestra los datos de los artículos
						
						c.listarArticulos();
						
					} else if (opcion == 3) { //Modifica los datos de un artículo
						
						System.out.println("Introduce el id del artículo a modificar:");
						int id = obj.nextInt();
						System.out.println();
						saltoDeLinea = obj.nextLine();
						
						System.out.println("Introduce el nuevo nombre del artículo:");
						String nombre = obj.nextLine();
						System.out.println();
						
						System.out.println("Introduce el nuevo precio del artículo:");
						Double precio = obj.nextDouble();
						System.out.println();
						
						System.out.println("Introduce el nuevo stock del artículo:");
						int stock = obj.nextInt();
						System.out.println();
						
						c.modificarArticulo(id, nombre, precio, stock);
						
					} else if (opcion == 4) { //Elimina los datos de un artículo
						
						System.out.println("Introduce el id del artículo a eliminar:");
						int id = obj.nextInt();
						System.out.println();
						
						c.eliminarArticulo(id);
						
					} else if (opcion == 5) { //Vuelve al menú principal
						
						System.out.println("Volviendo al menú principal");
						break;
						
					} else { //Mensaje que aparece al escoger una opción inválida
						
						System.out.println("Opción inválida");	
					} 
					
				} catch(InputMismatchException e) {
					
					System.out.println("Tipo de dato incorrecto");
					
				}
				
			} while(true);	

			obj.close();
		}
}
