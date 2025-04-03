package codigo;

import java.util.ArrayList;

public class Principal {

	public static void main(String[] args) {
		
		double total = 0;
		
		Circulo c1 = new Circulo(3, "rojo");
		Circulo c2 = new Circulo(8, "verde");
		Rectangulo r1 = new Rectangulo(4, 2, "azul");
		Rectangulo r2 = new Rectangulo(5, 7, "naranja");
	
		ArrayList<Figura> figuras = new ArrayList<>(); //Creauna lista de figuras
		
		figuras.add(c1);
		figuras.add(c2);
		figuras.add(r1);
		figuras.add(r2);

		for (int x = 0; x < figuras.size(); x++) { //Muestra el area de las figuras
			
			System.out.println("Area de la figura: " + figuras.get(x).calcularArea());
			
			total = total + figuras.get(x).calcularArea();
		}
		
		System.out.println("Area total: " + total); //Muestra el area total de la figura
	}
}
