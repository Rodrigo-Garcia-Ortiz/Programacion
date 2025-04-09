package Clases;

import java.util.HashMap;

import java.util.Scanner;

public class Principal {

	static int opcion = 0;
	static int numeroGatos = 0;
	static int numeroLeucemia = 0;
	
	public static void main(String[] args) {
		
		HashMap<Integer, Animal> animales = new HashMap<>(); //Crea un HashMap para guardar animales
		
		HashMap<Integer, Persona> adopciones = new HashMap<>(); //Crea un HashMap para guardar adopciones
		
		System.out.println("1-Dar de alta animal");
		System.out.println("2-Listar animales");
		System.out.println("3-Buscar animal");
		System.out.println("4-Realizar adopción");
		System.out.println("5-Dar de baja");
		System.out.println("6-Mostrar estadísticas de gatos");
		System.out.println("7-Salir");
		
		while(opcion != 7) { //Repite el bucle hasta que se decida salir
			
			Scanner obj = new Scanner(System.in);
			System.out.println("Escoge una opción: ");
			opcion = obj.nextInt();
			obj.close();
			
			if (opcion == 1) { //Registra un animal
				
				Scanner obj1 = new Scanner(System.in);
				System.out.println("Escoge una animal: ");
				String animal = obj1.nextLine();
				obj1.close();
	
				if (animal == "perro") {
					
					Scanner obj2 = new Scanner(System.in);
					System.out.println("Número de chip: ");
					int numeroChip = obj2.nextInt(); 
					obj2.close();
					
					Scanner obj3 = new Scanner(System.in);
					System.out.println("Nombre: ");
					String nombre = obj3.nextLine();
					obj3.close();
					
					Scanner obj4 = new Scanner(System.in);
					System.out.println("Edad: ");
					int edad = obj4.nextInt();
					obj4.close();
					
					Scanner obj5 = new Scanner(System.in);
					System.out.println("Raza: ");
					String raza = obj5.nextLine();
					obj5.close();
					
					Scanner obj6 = new Scanner(System.in);
					System.out.println("Adoptado: ");
					boolean adoptado = obj6.nextBoolean();
					obj6.close();
					
					Scanner obj7 = new Scanner(System.in);
					System.out.println("Tamaño: ");
					String tamaño = obj7.nextLine();
					obj7.close();
					
					Perro p1 = new Perro(numeroChip, nombre, edad, raza, adoptado, tamaño);
					
					for (int x : animales.keySet()) {
						
						if (x == numeroChip) {
							
							System.out.println("Chip ya registrado");
							
						} else {
							
							animales.put(p1.numeroChip, p1);
						}
					}
					
		    	} else if (animal == "gato") {
					
					System.out.println("Número de chip: ");
					int numeroChip = obj.nextInt(); 
					
					System.out.println("Nombre: ");
					String nombre = obj.nextLine();
					
					System.out.println("Edad: ");
					int edad = obj.nextInt();
					
					System.out.println("Raza: ");
					String raza = obj.nextLine();
					
					System.out.println("Adoptado: ");
					boolean adoptado = obj.nextBoolean();
					
					System.out.println("Leucemia: ");
					boolean leucemia = obj.nextBoolean();
					
		            Gato g1 = new Gato(numeroChip, nombre, edad, raza, adoptado, leucemia);
					
		            for (int x : animales.keySet()) {
						
						if (x == numeroChip) {
							
							System.out.println("Chip ya registrado");
							
						} else {
							
							animales.put(g1.numeroChip, g1);
							numeroGatos = numeroGatos + 1;
							
							if (g1.leucemia = true) {
								
								numeroLeucemia = numeroLeucemia + 1;
							}
						}
					}
					
				} else {
					
					System.out.println("Animal no válido");
				}
			} else if (opcion == 2) { //Muestra los animales registrados
				
				for (int x : animales.keySet()) {
					
					animales.get(x).mostrar();
					
				}
				
			} else if (opcion == 3) { //Permite buscar un animal concreto
					
				System.out.println("Introduce el número de chip del animal buscado: ");
				int chipBuscado = obj.nextInt(); //Recoge el numero del animal que se busca
					
				for (int x : animales.keySet()) {
						
					if (x == chipBuscado) {
							
						animales.get(chipBuscado).mostrar(); //Muestra los datos del animal buscado
							
					} else {
							
						System.out.println("Chip no registrado");
					}
				}
				
			} else if (opcion == 4) { //Permite adoptar un animal
				
				System.out.println("Introduce el nombre de la persona: ");
				String nombre = obj.nextLine();
				
				System.out.println("Introduce el teléfono de la persona: ");
				int tlf = obj.nextInt();
				
				System.out.println("Introduce el número de chip del animal: ");
				int numeroChip = obj.nextInt();
				
				Persona persona = new Persona(nombre, tlf);
				
		        for (int x : animales.keySet()) {
					
					if (x == numeroChip) {
						
						adopciones.put(numeroChip, persona);
						
					} else {
						
						System.out.println("Chip no registrado");
					}
				}	
			} else if (opcion == 5) { //Permite dar de baja un animal
				
				System.out.println("Introduce el número de chip del animal: ");
				int numeroChip = obj.nextInt();
				
		        for (int x : animales.keySet()) {
					
					if (x == numeroChip) {
						
						animales.remove(numeroChip);
						
						for (int y : adopciones.keySet()) {
							
							if (y == numeroChip) {

								adopciones.remove(numeroChip);
								
							} else {
								
							}
						}

						System.out.println("Animal dado de baja correctamente");
						
					} else {
						
						System.out.println("Chip no registrado");
					}
				}
				
			} else if (opcion == 6) { //Muestra el número de gatos y la cantidad de gatos con leucemia
				
				System.out.println("Número de gatos: " + numeroGatos);
				System.out.println("Número de gatos con leucemia: " + numeroLeucemia);
			
			} else if (opcion == 7) { //Sale del programa
				
				break;
				
			} else {
					
				System.out.println("Opción inválida");
			}
		}
	}
}
