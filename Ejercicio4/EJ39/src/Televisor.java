
public class Televisor extends Electrodomestico{

	int pulgadas;
	
    public Televisor(String marca, double precio, int pulgadas) { //Constructor
		
		this.marca = marca;
		this.precio = precio;
		this.pulgadas = pulgadas;
	}
	
	public void mostrarDatos() { //Muestra los datos
		System.out.println("Marca: " + marca);
		System.out.println("Precio: " + precio);
		System.out.println("Pulgadas: " + pulgadas);
	}
}
