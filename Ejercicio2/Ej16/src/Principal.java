import java.util.Scanner; //Inporta Scanner de la libreria util de java

public class Principal {

    public static void main(String[] args) {
        Scanner obj = new Scanner(System.in); //Crea un objeto Scanner 
        System.out.println("Introduce el número a verificar: ");
        int numero = obj.nextInt(); //Coge un valor numérico introducido por el teclado

        System.out.println(numero + " es par y mayor que 10: " + Verificador.esMayorYPar(numero)); //Muestra el resultado de la verificación
    }
}