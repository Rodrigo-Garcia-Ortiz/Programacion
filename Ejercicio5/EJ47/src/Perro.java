
public class Perro extends Animal{

	@Override
	public void hacerSonido() { //Emite sonido
		
		super.hacerSonido();
		System.out.println("Guau guau");
	}
}
