package vista;

import java.util.Scanner;

import controlador.ControladorInforme;

public class VistaInforme {

	public void buscarInforme() {
		
		Scanner obj = new Scanner(System.in);
	    ControladorInforme c = new ControladorInforme();
		
		System.out.println("Introduce el ID del cliente:");
		int id_cliente = obj.nextInt();
		System.out.println();
		
		c.listarVentas(id_cliente);
		
		obj.close();
	}
}
