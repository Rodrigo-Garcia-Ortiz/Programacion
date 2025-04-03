package codigo;

public class Array {

	String[] array = {"Luis", "María", "Juan"}; //Inicializa el array
	
	public void mostrarArray() { //Muestra los nombres del array en sentido inverso
		
		for (int x = 2; x >= 0; x--) {
			
			System.out.println(array[x]);
		}
	}
}
