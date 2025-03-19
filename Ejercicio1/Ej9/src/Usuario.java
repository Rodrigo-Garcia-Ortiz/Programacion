public class Usuario {

    private String nombre = "";

    public static String setNombre(String nuevoNombre) {
        nombre = nuevoNombre;
    }

    public String getNombre() {
        return nombre;
    }
}