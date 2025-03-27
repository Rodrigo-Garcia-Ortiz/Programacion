
public class Lavadora extends Electrodomestico {

	int capacidadKg;
	
	public Lavadora(String marca, double precio, int capacidadKg) { //Constructor
		
		this.marca = marca;
		this.precio = precio;
		this.capacidadKg = capacidadKg;
	}
	
	public void mostrarDatos() { //Muestra los datos
		System.out.println("Marca: " + marca);
		System.out.println("Precio: " + precio);
		System.out.println("Capacidad en KG: " + marca);
	}
}
