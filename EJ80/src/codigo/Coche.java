package codigo;

public class Coche extends Vehiculo implements Movible {

	public Coche(String id) { //Constructor
		
		super(id);
	}
	
	public void mover() { //Muestra un mensaje
		
		System.out.println("El coche " + id + " se mueve por la carretera");
	}
}
