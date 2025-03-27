
public class Principal {

	public static void main(String[] args) {
		
		CuentaBancaria cuenta = new CuentaBancaria();
		
		cuenta.depositar(500);
		cuenta.retirar(300);
		System.out.println(cuenta.getSaldo());

	}

}
