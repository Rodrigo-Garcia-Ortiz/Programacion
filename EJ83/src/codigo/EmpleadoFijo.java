package codigo;

public class EmpleadoFijo extends Empleado implements Pagable{

    double salarioBase;
	
	public EmpleadoFijo(int id, String nombre, double salarioBase) { //Constructor
		
		this.id = id;
		this.nombre = nombre;
		this.salarioBase = salarioBase;
	}
	
	public double calcularSalarioMensual() { //Calcula el salario mensual
		
		return salarioBase*31;
	}
}
