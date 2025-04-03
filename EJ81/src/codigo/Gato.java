package codigo;

public class Gato extends Animal implements Comunicable {

    public Gato(String nombre) { //Constructor
		
		super(nombre);
	}
	
	public String hacerSonido() { //Devuelve el sonido del animal
		
		return "Miau";
	}
}
