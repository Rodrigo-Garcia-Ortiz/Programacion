public class Operaciones {

    static int num1 = 8;
    static int num2 = 4;
    static int resultado;

    public static void main(String[] args) {
        resultado = num1 + num2;
        System.out.println("Suma: " + resultado); //Muestra el resultado de la suma
        resultado = num1 - num2;
        System.out.println("Resta: " + resultado); //Muestra el resultado de la resta
        resultado = num1 * num2;
        System.out.println("Multiplicación: " + resultado); //Muestra el resultado de la multiplicación
        resultado = num1 / num2;
        System.out.println("División: " + resultado); //Muestra el resultado de la división
    }
}