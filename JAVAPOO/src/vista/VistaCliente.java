package vista;

import java.util.InputMismatchException;
import java.util.Scanner;

import controlador.ControladorCliente;

public class VistaCliente {

	static String saltoDeLinea;
	
	public void menuCliente() { // Muestra las opciones de CRUD de la tabla clientes
		
       Scanner obj = new Scanner(System.in);
       ControladorCliente c = new ControladorCliente();
		
		do {
			
			try {
				
				System.out.println("1. Registrar cliente");
				System.out.println("2. Listar clientes");
				System.out.println("3. Modificar cliente");
				System.out.println("4. Eliminar cliente");
				System.out.println("5. Salir");
				System.out.println();
				
				System.out.println("Escoje una opción:");
				int opcion = obj.nextInt();
				System.out.println();
				saltoDeLinea = obj.nextLine();
				
				if (opcion == 1) { //Registra un nuevo cliente
					
					System.out.println("Introduce el nombre del cliente:");
					String nombre = obj.nextLine();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduce la dirección de correo del cliente:");
					String email = obj.nextLine();
					System.out.println();
					
					System.out.println("Introduce el número de teléfono del cliente:");
					int telefono = obj.nextInt();
					System.out.println();
					
					c.registrarCliente(nombre, email, telefono);
					
				} else if (opcion == 2) { //Muestra los datos de los clientes
					
					c.listarClientes();
					
				} else if (opcion == 3) { //Modifica los datos de un cliente
					
					System.out.println("Introduce el id del cliente a modificar:");
					int id = obj.nextInt();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduce el nuevo nombre del cliente:");
					String nombre = obj.nextLine();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduce la nueva dirección de correo del cliente:");
					String email = obj.nextLine();
					System.out.println();
					
					System.out.println("Introduce el  nuevo número de teléfono del cliente:");
					int telefono = obj.nextInt();
					System.out.println();
					
					c.modificarCliente(id, nombre, email, telefono);
					
				} else if (opcion == 4) { //Elimina los datos de un cliente
					
					System.out.println("Introduce el id del cliente a eliminar:");
					int id = obj.nextInt();
					System.out.println();
					
					c.eliminarCliente(id);
					
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
