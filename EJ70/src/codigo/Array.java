package codigo;
import java.util.Scanner; //Inporta Scanner de la libreria util de java

public class Array {
	
	public void crearArray() { //Crea un array y lo muestra
		
		int[] array = new int[5]; //Inicializa el array
		
		Scanner obj = new Scanner(System.in); //Inicializa un objeto Scanner
		
		for (int x = 0; x < array.length; x++) {
		
			System.out.println("Introduce un número en el array: ");
			int numero = obj.nextInt(); //Recoge un número introducido por el usuario
			
			array[x] = numero; //Guarda el número en el array
			System.out.println();
		}
		
		obj.close();
		
		for (int arr : array) { //Imprime el array
			
			System.out.println(arr);
			
		}
	}
}
