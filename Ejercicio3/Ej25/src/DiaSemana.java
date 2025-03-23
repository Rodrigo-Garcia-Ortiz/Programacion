import java.util.Scanner; //Inporta Scanner de la libreria util de java

public class DiaSemana {

  static Scanner obj = new Scanner(System.in); //Crea un objeto Scanner
  static int numero = obj.nextInt(); //Recoge un número entero introducido por el teclado

  public static void main(String[] args) { //Devuelve un día de la semana dependiendo del número introducido
    switch(numero) {

      case 1:
        System.out.println("Lunes");
        break;

      case 2:
        System.out.println("Martes");
        break;

      case 3:
        System.out.println("Miércoles");
        break;

      case 4:
        System.out.println("Jueves");
        break;

      case 5:
        System.out.println("Viernes");
        break;

     case 6:
        System.out.println("Sábado");
        break;

     case 7:
        System.out.println("Domingo");
        break;

     default:
        System.out.println("Número inválido");
        break;
    }
  }
}