
public class Profesor extends Persona{
	
	String asignatura;
	
	@Override
    public void mostrarDatos() { //muestra los datos
		
		System.out.println("Nombre: " + nombre);
		System.out.println("Edad: " + edad);
		System.out.println("Asignatura: " + asignatura);
	}

}
