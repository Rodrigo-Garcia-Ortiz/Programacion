
public class Principal {

	public static void main(String[] args) {
		
		Figura circulo = new Circulo(6);
		Figura rectangulo = new Rectangulo(8, 6);
		
		System.out.println("Área círculo: " + circulo.calcularArea());
		System.out.println("Área rectángulo: " + rectangulo.calcularArea());
		

	}

}
