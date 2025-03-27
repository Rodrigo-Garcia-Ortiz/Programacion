
public class Rectangulo extends Figura {
	
    double base;
    double altura;
	
	public Rectangulo(double base, double altura) { //Constructor
		
		this.base = base;
		this.altura = altura;
	}
	
	@Override
	double calcularArea() { //Calcula el área del rectángulo
		
		return base * altura;
	}
}
