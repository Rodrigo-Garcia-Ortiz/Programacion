package codigo;

public class Libro extends Item implements Describible{

	String titulo;
	
	public Libro(int id, String titulo) {
		
		this.id = id;
		this.titulo = titulo;
	}
	
	public String describir() {
		
		return "Libro: " + titulo;
	}
}
