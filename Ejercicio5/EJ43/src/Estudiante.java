
public class Estudiante extends Persona {
	
	String curso;

	public Estudiante(String nombre, int edad, String curso) { //constructor
	
		super(nombre, edad);
		this.curso = curso;
	}
	
	@Override
    public void mostrarDatos() { //muestra los datos
		
	    System.out.println("Nombre: " + nombre);
		System.out.println("Edad: " + edad);
		System.out.println("Curso: " + curso);
	}
}
