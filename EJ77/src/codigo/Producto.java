package codigo;

import java.util.HashMap;

public class Producto {
	
	static HashMap<String, Integer> productos = new HashMap<>();
	
	public static void añadirProducto() { //Agrega productos al HashMap		
		
		productos.put("Coche", 1200);
		productos.put("Lavadora", 200);
		productos.put("Pan", 12);
		productos.put("Leche", 7);
		
	}
	
	public static void listarProductos() { //Devuelve los productos con precio mayor a 50
		
		for (int x : productos.values()) {
			
			if (x > 50) {
				
				for (String y : productos.keySet()) {
					
					if (productos.get(y) == x) {
						
						System.out.println(y + " : " + x + "€");
					}
				}
			}
		}
	}
}
