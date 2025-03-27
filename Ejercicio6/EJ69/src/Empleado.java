
public class Empleado implements Identificable {

	String nombre;
	int id;
	
	public Empleado(String nombre, int id) { //Constructor
		
		this.nombre = nombre;
		this.id = id;
	}
	
	public void mostrarIdentidad() { //Muestra los datos del empleado
		
		System.out.println("Nombre: " + nombre);
		System.out.println("ID: " + id);
	}
}
