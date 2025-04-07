package Clases;

public class Perro extends Animal {

	String tamaño;
	
	public Perro(String numeroChip, String nombre, int edad, String raza, boolean adoptado, String tamaño) { //Constructor
		
		super(numeroChip, nombre, edad, raza, adoptado);
		
		this.tamaño = tamaño;
	}
	
	public void mostrar() { //Muestra los datos del perro
		
		System.out.println("Número de chip: " + numeroChip + ", Nombre: " + nombre + ", Edad: " + edad + ", Raza: " + raza + 
				", Adoptado: " + adoptado + ", Tamaño: " + tamaño);
	}
}