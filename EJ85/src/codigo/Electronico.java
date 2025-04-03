package codigo;

public class Electronico extends Item implements Describible{

String marca;
	
	public Electronico(int id, String marca) {
		
		this.id = id;
		this.marca = marca;
	}
	
	public String describir() {
		
		return "Libro electronico marca: " + marca;
	}
}
