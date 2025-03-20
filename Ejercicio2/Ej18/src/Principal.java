import java.util.Scanner; //Inporta Scanner de la libreria util de java

public class Principal {

    public static void main(String[] args) {
        Scanner obj = new Scanner(System.in); //Crea un objeto Scanner 
        System.out.println("Introduce el número a convertir:");
        double numero = obj.nextDouble(); //Coge un valor decimal introducido por el teclado                                                               

        System.out.println(Conversor.convertirDoubleAInt(numero)); //Muestra el resultado de pasar de decimal a entero
   }
}