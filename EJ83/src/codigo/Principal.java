package codigo;

import java.util.HashMap;

public class Principal {

	public static void main(String[] args) {
		
		EmpleadoFijo ef1 = new EmpleadoFijo(1, "Juan", 27.5);
		EmpleadoFijo ef2 = new EmpleadoFijo(2, "Matias", 31.43);
		EmpleadoPorHoras eh1 = new EmpleadoPorHoras(3, "Luis", 7, 12);
		EmpleadoPorHoras eh2 = new EmpleadoPorHoras(4, "Antonio", 5.12, 20);
	
		HashMap<Integer, Empleado> empleados = new HashMap<>(); //Crea un diccionario de empleados
		
		empleados.put(ef1.id, ef1);
		empleados.put(ef2.id, ef2);
		empleados.put(eh1.id, eh1);
		empleados.put(eh2.id, eh2);

		for (int x = 0; x < empleados.size(); x++) { //Muestra nombre y salario de empleados
			
			System.out.println(empleados.get(x).nombre + ": " + empleados.get(x).calcularSalarioMensual());
		}
	}
}
