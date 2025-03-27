
public class Cuadrado implements Figura{

	double lado;
	
	public Cuadrado(double lado) { //Constructor
		
		this.lado = lado;
	}
	
    public void calcularArea() { //Calcula el área del cuadrado
		
		System.out.println("Área del cuadrado: " + lado * lado);
	}
}
