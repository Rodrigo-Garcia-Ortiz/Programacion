import java.util.Scanner; //Inporta Scanner de la libreria util de java

public class Principal {

    public static void main(String[] args) {
        Scanner obj = new Scanner(System.in); //Crea un objeto Scanner 
        System.out.println("Introduce el radio del círculo: ");
        double radio = obj.nextDouble(); //Coge un valor double introducido por el teclado

        System.out.println("La circunferencia del círculo de radio " + radio + " es: " + Circunferencia.calcularCircunferencia(radio)); //Muestra la circunferencia del círculo
    }
}