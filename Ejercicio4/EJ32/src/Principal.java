
public class Principal {

	public static void main(String[] args) {
		
		Persona p1 = new Persona();
		Persona p2 = new Persona("Manuel");
		Persona p3 = new Persona("Juan", 20);

		p1.mostrarDatos(); //Muestra los datos de la primera persona
		p2.mostrarDatos(); //Muestra los datos de la segunda persona
		p3.mostrarDatos(); //Muestra los datos de la tercera persona
	}

}
