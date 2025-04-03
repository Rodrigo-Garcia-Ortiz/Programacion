package codigo;

public class Circulo extends Figura implements Calculable {
	
	double radio;
	
	public Circulo(double radio, String color) { //Constructor
		
		this.radio = radio;
		this.color = color;
	}
	
	public double calcularArea() { //Calcula el área del circulo
		
		return 3.14 * radio * radio;
	}
}
