package codigo;

import java.util.LinkedList;

public class Principal {

	public static void main(String[] args) {
		
		NotificacionEmail ne1 = new NotificacionEmail("correo1@gmail");
		NotificacionEmail ne2 = new NotificacionEmail("correo2@gmail");
		NotificacionSMS ns1 = new NotificacionSMS(456475736);
		NotificacionSMS ns2 = new NotificacionSMS(235469367);
	
		LinkedList<Notificable> notificaciones = new LinkedList<>(); //Crea una lista de notificaciones
		
		notificaciones.add(ne1);
		notificaciones.add(ne2);
		notificaciones.add(ns1);
		notificaciones.add(ns2);
		
		String mensaje = "Buenos dias";

		for (int x = 0; x < notificaciones.size(); x++) { //Muestra las notificaciones
			
			notificaciones.get(x).enviarMensaje(mensaje);
		}
	}
}
