package Clases;

public class Personalizado {

    static String mensaje;

    public static String mostrarMensaje(String nombre) {
        mensaje = "¡Hola," + nombre + "!";
        return mensaje;
    }
}