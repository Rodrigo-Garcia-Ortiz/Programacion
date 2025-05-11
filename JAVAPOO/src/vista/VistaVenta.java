package vista;

import java.sql.Date;
import java.util.InputMismatchException;
import java.util.Scanner;

import controlador.ControladorVentas;

public class VistaVenta {

static String saltoDeLinea;
	
	public void menuVenta() { // Muestra las opciones de CRUD de la tabla ventas
	   
       Scanner obj = new Scanner(System.in);
       ControladorVentas c = new ControladorVentas();
		
		do {
				try {
					
					System.out.println("1. Registrar venta");
					System.out.println("2. Listar ventas");
					System.out.println("3. Modificar venta");
					System.out.println("4. Eliminar venta");
					System.out.println("5. Salir");
					System.out.println();
					
					System.out.println("Escoje una opción:");
					int opcion = obj.nextInt();
					System.out.println();
					
					if (opcion == 1) { //Registra una nueva venta
						
						System.out.println("Introduce el ID del cliente:");
						int id_cliente = obj.nextInt();
						System.out.println();
						
						System.out.println("Introduce el ID del artículo:");
						int id_articulo = obj.nextInt();
						System.out.println();
						
						System.out.println("Introduce la cantidad del artículo:");
						int cantidad = obj.nextInt();
						System.out.println();
						saltoDeLinea = obj.nextLine();
						
						System.out.println("Introduce la fecha de la venta:");
						String fechaTexto = obj.nextLine();
						Date fecha = java.sql.Date.valueOf(fechaTexto);
						System.out.println();
						
						c.registrarVenta(id_cliente, id_articulo, cantidad, fecha);
						
					} else if (opcion == 2) { //Muestra los datos de las facturas
						
						c.listarVentas();
						
					} else if (opcion == 3) { //Modifica los datos de una factura
						
						System.out.println("Introduce el id de la venta a modificar:");
						int id_venta = obj.nextInt();
						System.out.println();
						
						System.out.println("Introduce el nuevo ID del cliente:");
						int id_cliente = obj.nextInt();
						System.out.println();
						
						System.out.println("Introduce el nuevo ID del artículo:");
						int id_articulo = obj.nextInt();
						System.out.println();
						
						System.out.println("Introduce la nueva cantidad del artículo:");
						int cantidad = obj.nextInt();
						System.out.println();
						saltoDeLinea = obj.nextLine();
						
						System.out.println("Introduce la nueva fecha de la venta:");
						String fechaTexto = obj.nextLine();
						Date fecha = java.sql.Date.valueOf(fechaTexto);
						System.out.println();
						
						c.modificarVenta(id_venta, id_cliente, id_articulo, cantidad, fecha);
						
					} else if (opcion == 4) { //Elimina los datos de una venta
						
						System.out.println("Introduce el id de la venta a eliminar:");
						int id = obj.nextInt();
						System.out.println();
						
						c.eliminarVenta(id);
						
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
