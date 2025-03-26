
public class Principal {

	public static void main(String[] args) {
		
		Persona estudiante = new Estudiante("Juan", 13, "primero");
		Persona profesor = new Profesor("Manuel", 32, "Lengua");

		estudiante.mostrarDatos();
		
		if (estudiante instanceof Estudiante) { //Muestra el mensaje si es estudiante
			
			System.out.println("Es un estudiante");
		}
		
		profesor.mostrarDatos();
		
        if (profesor instanceof Profesor) { //Muestra el mensaje si es profesor
			
			System.out.println("Es un profesor");
		}
		
	}
}
