package Clases;

import java.util.HashMap;

import java.util.Scanner;

public class Principal {
	
	public static void main(String[] args) {
		
		Scanner obj = new Scanner(System.in); //Inicializa un objeto Scanner
		
		Perro p1 = new Perro("1", "Toby", 5, "Labrador", true, "Grande");
		Perro p2 = new Perro("3", "Rex", 7, "Pastor Alemán", false, "mediano");
		
		Gato c1 = new Gato("2", "Calcetines", 2, "Calico", true, false);
		Gato c2 = new Gato("4", "Misifu", 6, "Persa", false, true);
		
        HashMap<String, Animal> animales = new HashMap<>(); //Crea un HashMap para guardar animales
		
		animales.put(p1.numeroChip, p1);
		animales.put(c1.numeroChip, c1);
		animales.put(p2.numeroChip, p2);
		animales.put(c2.numeroChip, c2);

		System.out.println("Introduce el número de chip del animal buscado: ");
		
		String chipBuscado = obj.nextLine(); //Recoge el numero del animal que se busca
		
	    animales.get(chipBuscado).mostrar(); //Muestra los datos del animal buscado
		
		obj.close(); //Cierra el objeto Scanner
	}
}
