
public class ConsoleLogger implements Logger{

	public void registrar(String mensaje) { //Imprime un mensaje
		
		System.out.println(mensaje);
	}
	
	public void separador() { //Imprime una linea de separacion
		
		System.out.println("----------------------");
	}
}
