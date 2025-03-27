
public class Principal {

	public static void main(String[] args) {
		
		Empleado e = new Empleado("Juan", 203.43, "Ventas");
		Subordinado s = new Subordinado("Maria", 184.65, "Finanzas");
		
		e.mostrarDatos();
		s.mostrarDatos();

	}
}
