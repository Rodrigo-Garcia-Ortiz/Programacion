import java.util.Scanner; //Inporta Scanner de la libreria util de java

public class Principal {

  public static void main(String[] args) {
  
    Scanner obj = new Scanner(System.in); //Crea un objeto Scanner
    int numero = obj.nextInt(); //Recoge un número entero introducido por el teclado
  
    System.out.println(esPositivoYPar(numero));
  }
}