
public class Circulo extends Figura {
	
	double radio;
	
	public Circulo(double radio) {
        this.radio = radio;    }
	
	@Override
    double calcularArea() { //Calcula el área del círculo
        return Math.PI * radio * radio;
    }
}
