
public class Profesor extends Persona{
	
	String asignatura;
	
	public Profesor(String nombre, int edad, String asignatura) { //constructor
        super(nombre, edad);
        this.asignatura = asignatura;
    }
	
	@Override
    public void mostrarDatos() { //muestra los datos
		
		System.out.println("Nombre: " + nombre);
		System.out.println("Edad: " + edad);
		System.out.println("Asignatura: " + asignatura);
	}

}
