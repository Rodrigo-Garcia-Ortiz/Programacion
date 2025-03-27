
public class Coche extends Vehiculo {

	int puertas;
	
	public Coche(String marca, String modelo, int puertas) { //Constructor
		
		this.marca = marca;
		this.modelo = modelo;
		this.puertas = puertas;
	}
	
	public void mostrarDatos() { //Muestra los datos
		
		System.out.println("Marca: " + marca);
		System.out.println("Modelo: " + modelo);
		System.out.println("Número de puertas: " + puertas);
	}
	
	@Override
    public void describir() { //Imprime el mensaje
		
		System.out.println("Soy un coche de marca " + marca + " y modelo " + modelo);
	}
}
