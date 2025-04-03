package codigo;

public class TareaSimple extends Tarea implements Ejecutable {

	public TareaSimple(String descripcion, int prioridad) {
		
		this.descripcion = descripcion;
		this.prioridad = prioridad;
	}
	
	public void ejecutar() {

		System.out.println("Ejecutando tarea: " + descripcion);
	}

}
