
public class Principal {
	

	public static void main(String[] args) {
		
		Persona p;
		Persona persona = new Persona("Juan", 20);
		Estudiante estudiante = new Estudiante("Alberto", 14, "segundo");
		
		p = persona;
		p.mostrarDatos(); //Muestra datos de la persona
		
		p = estudiante;
		p.mostrarDatos(); //Muestra datos del estudiante
		
	}

}
