
public class Persona {

	String nombre;
	int edad;
	
	public Persona(String nombre, int edad) { //Constructor
		
		this.nombre = nombre;
		this.edad = edad;
	}
	
	public void mostrarDatos() { //Muestra los datos
		
		System.out.println("Nombre: " + nombre);
		System.out.println("Edad: " + edad);
	}
}
