package codigo;

public class Piano extends Instrumento implements Tocable{
	
	int numeroTeclas;
	
	public Piano(String marca, int numeroTeclas) {
		
		this.marca = marca;
		this.numeroTeclas = numeroTeclas;
	}

	public void tocarNota(String nota) {
		
		System.out.println("El piano toca la nota: " + nota);
	}
}
