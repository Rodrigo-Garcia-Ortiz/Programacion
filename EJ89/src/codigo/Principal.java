package codigo;

import java.util.HashMap;
import java.util.Iterator;

public class Principal {

	public static void main(String[] args) {
		
		CuentaAhorro ca1 = new CuentaAhorro("1", 234.54, "12%");
		CuentaCorriente cc1 = new CuentaCorriente("2", 301.62, "2000");

		HashMap<String, Cuenta> cuentas = new HashMap<>(); //Crea un HashMap de cuentas
		cuentas.put(ca1.numeroCuenta, ca1);
		cuentas.put(cc1.numeroCuenta, cc1);
	

	Iterator<HashMap.Entry<String, Cuenta>> it = cuentas.entrySet().iterator();  //Itera el HashMap y muestra los detalles
		
		while (it.hasNext()) {
		    HashMap.Entry<String, Cuenta> entry = it.next();
		    System.out.println(entry.obtenerDetalles());	

	
	}
  }
}