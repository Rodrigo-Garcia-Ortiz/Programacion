
public class Principal {

	public static void main(String[] args) {
		
		Persona estudiante = new Estudiante("Juan", 13, "primero");
		Persona profesor = new Profesor("Manuel", 32, "Lengua");

		estudiante.mostrarDatos();
		profesor.mostrarDatos();
	}
}
