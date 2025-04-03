package codigo;

public class Rectangulo extends Figura implements Calculable {

    double ancho;
    double alto;
	
	public Rectangulo(double ancho, double alto, String color) { //Constructor
		
		this.ancho = ancho;
		this.alto = alto;
		this.color = color;
	}
	
	public double calcularArea() { //Calcula el área del rectángulo
		
		return ancho * alto;
	}
}
