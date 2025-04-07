package Clases;

public abstract class Animal {

	String numeroChip;
	String nombre;
	int edad;
	String raza;
	boolean adoptado;
	
    public Animal(String numeroChip, String nombre, int edad, String raza, boolean adoptado) { //Constructor
		
		this.numeroChip = numeroChip;
		this.nombre = nombre;
		this.edad = edad;
		this.raza = raza;
		this.adoptado = adoptado;
	}
	
	abstract void mostrar(); //Método abstracto
	
}
