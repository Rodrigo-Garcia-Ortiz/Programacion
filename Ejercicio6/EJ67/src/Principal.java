
public class Principal {

	public static void main(String[] args) {

		Cuadrado cuadrado = new Cuadrado(4);
		Triangulo triangulo = new Triangulo(3, 2);
		
		cuadrado.calcularArea(); //Muestra el área del cuadrado
		triangulo.calcularArea(); //Muestra el área del triángulo
	}

}
