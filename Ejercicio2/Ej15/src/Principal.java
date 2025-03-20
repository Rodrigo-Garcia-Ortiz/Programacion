import operaciones.Multiplicador;

public class Principal {

    static int a = 4;
    static int b = 8;

    public static void main(String[] args) {
        System.out.println("Resultado de multiplicar " + a + " por " + b + ": " +Multiplicador.multiplicar(a, b));
    }
}