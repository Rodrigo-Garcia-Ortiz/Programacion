import java.util.Scanner; //Inporta Scanner de la libreria util de java

public class Sumar {

  public static void main(String[] args) { // Suma números hasta que se introduce 0
    
    int resultado = 0;
    int numero;

    do {
      Scanner obj = new Scanner(System.in); //Crea un objeto Scanner
      System.out.println("Introduce un número: ");
      numero = obj.nextInt(); //Recoge un número entero introducido por el teclado

      resultado = resultado + numero; 
      System.out.println("Resultado: " + resultado);

    } while(numero != 0);
  }
}