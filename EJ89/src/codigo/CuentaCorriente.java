package codigo;

public class CuentaCorriente extends Cuenta implements Auditable {

    String limiteSobregiro;
	
	public CuentaCorriente(String numeroCuenta, double saldo, String limiteSobregiro) { //Constructor
		
		this.numeroCuenta = numeroCuenta;
		this.saldo = saldo;
		this.limiteSobregiro = limiteSobregiro;
	}
	
	public String obtenerDetalles() { //Muestra los detalles de la cuenta
		
		return "Número de cuenta: " + numeroCuenta + "  Saldo: " + saldo + "  Límite sobre giro: " + limiteSobregiro;
	}

}
