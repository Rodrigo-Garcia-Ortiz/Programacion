public class Comparador {

  static int a = 9;
  static int b = 3;

  public static void main(String[] args) {
    comparar(a, b);
  }

  public static void comparar(int a, int b) { //Determina que numero es mayor
    if (a > b) {
        System.out.println("a es mayor que b");

    } else if (a == b) {
        System.out.println("a es igual que b");

    } else {
        System.out.println("a es menor que b");
    }
  }
}