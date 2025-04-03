package codigo;

public class Perro extends Animal implements Comunicable {

    public Perro(String nombre) { //Constructor
		
		super(nombre);
	}
	
	public String hacerSonido() { //Devuelve el sonido del animal
		
		return "Guau";
	}
}
