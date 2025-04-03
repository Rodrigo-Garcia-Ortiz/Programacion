package codigo;

public class Bicicleta extends Vehiculo implements Movible {

    public Bicicleta(String id) { //Constructor
		
		super(id);
	}
	
	public void mover() { //Muestra un mensaje
		
		System.out.println("La bicicleta " + id + " pedalea");
		
	}
}
