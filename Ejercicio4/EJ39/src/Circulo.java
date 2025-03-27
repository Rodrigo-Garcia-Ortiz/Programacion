
public class Circulo extends Figura {

	double radio;
	
	public Circulo(double radio) { //Constructor
		
		this.radio = radio;
	}
	
	@Override
	double calcularArea() { //Calcula el área del circulo
		
		return Math.PI * radio * radio;
	}
}
