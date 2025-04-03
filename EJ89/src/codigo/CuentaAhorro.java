package codigo;

public class CuentaAhorro extends Cuenta implements Auditable {

	String tasaIntereses;
	
	public CuentaAhorro(String numeroCuenta, double saldo, String tasaIntereses) { //Constructor
		
		this.numeroCuenta = numeroCuenta;
		this.saldo = saldo;
		this.tasaIntereses = tasaIntereses;
	}
	
	public String obtenerDetalles() { //Muestra los detalles de la cuenta
		
		return "Número de cuenta: " + numeroCuenta + "  Saldo: " + saldo + "  Tasa de intereses: " + tasaIntereses;
	}

}
