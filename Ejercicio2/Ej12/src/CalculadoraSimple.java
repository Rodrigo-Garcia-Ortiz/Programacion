public class CalculadoraSimple {

    static int num1 = 12;
    static int num2 = 6;
    static int resultado;

    public static void main(String[] args) {
        resultado = num1 + num2;
        System.out.println("Suma: " + resultado);
        resultado = num1 - num2;
        System.out.println("Resta: " + resultado);
        resultado = num1 * num2;
        System.out.println("Multiplicación: " + resultado);
        resultado = num1 / num2;
        System.out.println("División: " + resultado);
    }
}