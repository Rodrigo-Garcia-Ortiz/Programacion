package codigo;

import java.util.ArrayList;

public class Principal {

	public static void main(String[] args) {
		
		Coche c1 = new Coche("Toyota");
		Coche c2 = new Coche("Corolla");
		Bicicleta b1 = new Bicicleta("Shimano");
		Bicicleta b2 = new Bicicleta("Stevens");
	
		ArrayList<Movible> vehiculos = new ArrayList<>();
		
		vehiculos.add(c1);
		vehiculos.add(c2);
		vehiculos.add(b1);
		vehiculos.add(b2);

		for (int x = 0; x < vehiculos.size(); x++) { //Muestra un mensaje dependiente del tipo de vehículo
			
			vehiculos.get(x).mover();
		}
	}

}
