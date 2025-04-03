package codigo;

import java.util.ArrayList;
import java.util.Iterator;

public class Frutas {

	static ArrayList<String> frutas = new ArrayList<>();
	
	public static void añadirFrutas() { //Crea una lista de frutas
		
		frutas.add("Pera");
		frutas.add("Manzana");
		frutas.add("Naranja");
		frutas.add("Plátano");
		
		System.out.println(frutas);
		System.out.println("");
	}
	
	public static void eliminarFruta(String fruta) { //Elimina la fruta indicada
		
		Iterator<String> it = frutas.iterator();
		
		while (it.hasNext()) {
			
		    String f = it.next();
		    
		    if (f.equals(fruta)) {
		    	
		        it.remove();
		    }
		}
		System.out.println(fruta + " eliminada");
		System.out.println(frutas);
	}	
}
