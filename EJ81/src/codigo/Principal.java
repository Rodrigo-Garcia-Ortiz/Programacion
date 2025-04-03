package codigo;

import java.util.ArrayList;

public class Principal {

	public static void main(String[] args) {
		
		Perro p1 = new Perro("Toby");
		Perro p2 = new Perro("Rex");
		Gato g1 = new Gato("Bigotes");
		Gato g2 = new Gato("Calcetines");
	
		ArrayList<Animal> animales = new ArrayList<>(); //Creauna lista de animales
		
		animales.add(p1);
		animales.add(p2);
		animales.add(g1);
		animales.add(g2);

		for (int x = 0; x < animales.size(); x++) { //Muestra el nombre y sonido del animal
			
			System.out.println(animales.get(x).nombre + ": " + animales.get(x).hacerSonido());
		}
	}

}
