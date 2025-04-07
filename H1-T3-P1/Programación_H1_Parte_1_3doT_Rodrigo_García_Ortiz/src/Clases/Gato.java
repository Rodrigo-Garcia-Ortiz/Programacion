package Clases;

public class Gato extends Animal {

    boolean leucemia;
	
	public Gato(String numeroChip, String nombre, int edad, String raza, boolean adoptado, boolean leucemia) { //Constructor
		
		super(numeroChip, nombre, edad, raza, adoptado);
		
		this.leucemia = leucemia;
	}
	
	public void mostrar() { //Muestra los datos del gato
		
		System.out.println("Número de chip: " + numeroChip + ", Nombre: " + nombre + ", Edad: " + edad + ", Raza: " + raza + 
				", Adoptado: " + adoptado + ", Leucemia: " + leucemia);
	}
}

