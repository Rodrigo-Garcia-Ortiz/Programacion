package codigo;

import java.util.HashSet;

public class Principal {

	public static void main(String[] args) {
		
		Guitarra g1 = new Guitarra("a", 7);
		Guitarra g2 = new Guitarra("a", 7);
		Piano p1 = new Piano("b", 20);
		Piano p2 = new Piano("b", 20);
		
		HashSet<Instrumento> instrumentos = new HashSet<>();

		instrumentos.add(g1);
		instrumentos.add(g2);
		instrumentos.add(p1);
		instrumentos.add(p2);
		
	}

}
