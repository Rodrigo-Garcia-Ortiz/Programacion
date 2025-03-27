
public class CuentaBancaria {

	private double saldo;
	
	public void depositar(double cantidad) { //Depositar dinero
		
		saldo += cantidad;
	}
	
    public void retirar(double cantidad) { //Retirar dinero
		
		saldo -= cantidad;
	}

    public double getSaldo() { //Mostrar saldo
    	
    	return saldo;
    }
}
