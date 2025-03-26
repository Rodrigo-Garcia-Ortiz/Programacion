
public class Principal {

	public static void main(String[] args) {
		
		Coche c = new Coche("Toyota", "Corolla", 4);
		
		System.out.println("Marca: " + c.getMarca());
		System.out.println("Modelo: " + c.getModelo());
		System.out.println("Número de puertas: " + c.getPuertas());

	}

}
