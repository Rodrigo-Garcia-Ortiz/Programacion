
public class Triangulo implements Figura {

    double base;
    double altura;
	
	public Triangulo(double base, double altura) { //Constructor
		
		this.base = base;
		this.altura = altura;
	}
	
    public void calcularArea() { //Calcula el área del triángulo
		
		System.out.println("Área del triángulo: " + base * altura / 2);
	}
}
