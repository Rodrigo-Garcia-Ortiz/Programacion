package codigo;

public class NotificacionSMS implements Notificable {

    int numeroTelefono;
	
	public NotificacionSMS(int numeroTelefono) { //Constructor
		
		this.numeroTelefono = numeroTelefono;
	}
	
	public void enviarMensaje(String mensaje) { //Muestra a quien se envia el mensaje
		
		System.out.println("Mensaje " + mensaje + " enviado a: " + numeroTelefono);
	}
}

