package codigo;

public class Guitarra extends Instrumento implements Tocable{
	
	int numeroCuerdas;
	
	public Guitarra(String marca, int numeroCuerdas) {
		
		this.marca = marca;
		this.numeroCuerdas = numeroCuerdas;
	}

	public void tocarNota(String nota) {
		
		System.out.println("La gitarra toca la nota: " + nota);
	}
}
