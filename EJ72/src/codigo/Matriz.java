package codigo;

public class Matriz {

	int[][] matriz = {
			{2, 7, 4},
			{5, 9, 1},
			{6, 8, 3}
	};
	
	public void mostrarMatriz() { //Imprime la matriz
		
		for (int x = 0; x < matriz.length; x++) {
		    for (int y = 0; y < matriz[x].length; y++) {
		        System.out.print(matriz[x][y] + " ");
		    }
		    System.out.println();
		}
	}
}
