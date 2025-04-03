package codigo;

public class NotificacionEmail implements Notificable {

	String direccionCorreo;
	
	public NotificacionEmail(String direccionCorreo) { //Constructor
		
		this.direccionCorreo = direccionCorreo;
	}
	
	public void enviarMensaje(String mensaje) { //Muestra a quien se envia el mensaje
		
		System.out.println("Mensaje " + mensaje + " enviado a: " + direccionCorreo);
	}
}
