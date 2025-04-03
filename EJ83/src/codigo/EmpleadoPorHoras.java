package codigo;

public class EmpleadoPorHoras extends Empleado implements Pagable {

    double tarifaHora;
    int horasTrabajadas;
	
	public EmpleadoPorHoras(int id, String nombre, double tarifaHora, int horasTrabajadas) { //Constructor
		
		this.id = id;
		this.nombre = nombre;
		this.tarifaHora = tarifaHora;
		this.horasTrabajadas = horasTrabajadas;
	}
	
	public double calcularSalarioMensual() { //Calcula el salario mensual
		
		return horasTrabajadas*tarifaHora;
	}
}
