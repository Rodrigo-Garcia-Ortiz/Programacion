
public class Principal {

	public static void main(String[] args) {
		
		Lavadora lavadora = new Lavadora("LG", 305.21, 34);
		Televisor televisor = new Televisor("SONY", 486.54, 20);
		Circulo circulo = new Circulo(2.43);
		Rectangulo rectangulo = new Rectangulo(5.32, 2.13);
		
		lavadora.mostrarDatos(); //Muestra los datos de la lavadora
		televisor.mostrarDatos(); //Muestra los datos del televisor
		
		System.out.println("Área circulo: " + circulo.calcularArea()); //Muestra el área del circulo
		System.out.println("Área rectángulo: " + rectangulo.calcularArea()); //Muestra el área del rectangulo

	}

}
