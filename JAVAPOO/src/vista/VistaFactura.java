package vista;

import java.sql.Date;
import java.util.InputMismatchException;
import java.util.Scanner;

import controlador.ControladorFacturas;

public class VistaFactura {

    static String saltoDeLinea;
	
	public void menuFactura() { // Muestra las opciones de CRUD de la tabla facturas
	   
       Scanner obj = new Scanner(System.in);
       ControladorFacturas c = new ControladorFacturas();
		
		do {				
				try {
					
					System.out.println("1. Registrar factura");
					System.out.println("2. Listar facturas");
					System.out.println("3. Modificar facturas");
					System.out.println("4. Eliminar factura");
					System.out.println("5. Salir");
					System.out.println();
					
					System.out.println("Escoje una opción:");
					int opcion = obj.nextInt();
					System.out.println();
					
					if (opcion == 1) { //Registra una nueva factura
						
						System.out.println("Introduce el ID del proveedor:");
						int id = obj.nextInt();
						System.out.println();
						saltoDeLinea = obj.nextLine();
						
						System.out.println("Introduce la fecha de la factura:");
						String fechaTexto = obj.nextLine();
						Date fecha = java.sql.Date.valueOf(fechaTexto);
						System.out.println();
						
						System.out.println("Introduce el precio total de la factura:");
						Double precio = obj.nextDouble();
						System.out.println();
						
						c.registrarFactura(id, fecha, precio);
						
					} else if (opcion == 2) { //Muestra los datos de las facturas
						
						c.listarFacturas();
						
					} else if (opcion == 3) { //Modifica los datos de una factura
						
						System.out.println("Introduce el id de la factura a modificar:");
						int id_factura = obj.nextInt();
						System.out.println();
						
						System.out.println("Introduce el nuevo id del proveedor la factura:");
						int id_proveedor = obj.nextInt();
						System.out.println();
						
						System.out.println("Introduce la nueva fecha de la factura:");
						String fechaTexto = obj.nextLine();
						Date fecha = java.sql.Date.valueOf(fechaTexto);
						System.out.println();
						
						System.out.println("Introduce el nuevo precio total de la factura:");
						Double precio = obj.nextDouble();
						System.out.println();
						
						c.modificarFactura(id_factura, id_proveedor, fecha, precio);
						
					} else if (opcion == 4) { //Elimina los datos de una factura
						
						System.out.println("Introduce el id de la factura a eliminar:");
						int id = obj.nextInt();
						System.out.println();
						
						c.eliminarFactura(id);
						
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
