public class BreakContinue {

  public static void main(String[] args) { //Imprime números del 1 al 10 saltandose el 5 y parando en 8
    for (int x = 1; x <= 10; x++) {
      if (x == 5) {
        continue;
      } else if (x == 8) {
        break;
      } else {
        System.out.println(x);
      }
    }
  }
}
