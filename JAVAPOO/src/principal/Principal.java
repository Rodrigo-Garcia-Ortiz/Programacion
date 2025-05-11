package principal;

import vista.*;
import java.util.InputMismatchException;
import java.util.Scanner;

public class Principal {

	public static void main(String[] args) {
		
		Scanner obj = new Scanner(System.in);
		
		do {
			
			try {
				
				System.out.println("1. Clientes");
				System.out.println("2. Proveedores");
				System.out.println("3. Artículos");
				System.out.println("4. Facturas");
				System.out.println("5. Ventas");
				System.out.println("6. Informes de venta por cliente");
				System.out.println("7. Salir");
				System.out.println();
				
				System.out.println("Escoje una opción:");
				int opcion = obj.nextInt();
				System.out.println();
				
				if (opcion == 1) { //Va al menu de clientes
					
					VistaCliente vc = new VistaCliente();
					vc.menuCliente();
					
				} else if (opcion == 2) { //Va al menu de proveedores
					
					VistaProveedor vp = new VistaProveedor();
					vp.menuProveedor();
					
				} else if (opcion == 3) { //Va al menu de artículos
					
					VistaArticulo va = new VistaArticulo();
					va.menuArticulo();
					
				} else if (opcion == 4) { //Va al menu de facturas
					
					VistaFactura vf = new VistaFactura();
					vf.menuFactura();
					
				} else if (opcion == 5) { //Va al menu de ventas
					
					VistaVenta vv = new VistaVenta();
					vv.menuVenta();
					
				} else if (opcion == 6) { //Va al menu de informe de ventas
					
					VistaInforme vi = new VistaInforme();
					vi.buscarInforme();
					
				} else if (opcion == 7) { //Sale del programa
					
					System.out.println("Saliendo del programa");
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
