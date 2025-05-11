package vista;

import java.util.InputMismatchException;
import java.util.Scanner;

import controlador.ControladorProveedor;

public class VistaProveedor {

static String saltoDeLinea;
	
	public void menuProveedor() { // Muestra las opciones de CRUD de la tabla proveedores
		
       Scanner obj = new Scanner(System.in);
       ControladorProveedor c = new ControladorProveedor();
		
		do {
			
			try {
				
				System.out.println("1. Registrar proveedor");
				System.out.println("2. Listar proveedores");
				System.out.println("3. Modificar proveedor");
				System.out.println("4. Eliminar proveedor");
				System.out.println("5. Salir");
				System.out.println();
				
				System.out.println("Escoje una opción:");
				int opcion = obj.nextInt();
				System.out.println();
				saltoDeLinea = obj.nextLine();
				
				if (opcion == 1) { //Registra un nuevo proveedor
					
					System.out.println("Introduce el nombre del proveedor:");
					String nombre = obj.nextLine();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduce el cif del proveedor:");
					String cif = obj.nextLine();
					System.out.println();
					
					System.out.println("Introduce el número de teléfono del proveedor:");
					int telefono = obj.nextInt();
					System.out.println();
					
					c.registrarProveedor(nombre, cif, telefono);
					
				} else if (opcion == 2) { //Muestra los datos de los proveedores
					
					c.listarProveedores();
					
				} else if (opcion == 3) { //Modifica los datos de un proveedor
					
					System.out.println("Introduce el id del proveedor a modificar:");
					int id = obj.nextInt();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduce el nuevo nombre del proveedor:");
					String nombre = obj.nextLine();
					System.out.println();
					saltoDeLinea = obj.nextLine();
					
					System.out.println("Introduce el nuevo cif del proveedor:");
					String email = obj.nextLine();
					System.out.println();
					
					System.out.println("Introduce el nuevo número de teléfono del proveedor:");
					int telefono = obj.nextInt();
					System.out.println();
					
					c.modificarProveedor(id, nombre, email, telefono);
					
				} else if (opcion == 4) { //Elimina los datos de un proveedor
					
					System.out.println("Introduce el id del proveedor a eliminar:");
					int id = obj.nextInt();
					System.out.println();
					
					c.eliminarProveedor(id);
					
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
