public class Verificador {

  public static boolean esPositivoYPar(int numero) { //Determina si un número es par y positivo
    if(numero > 0) {
      if (numero % 2) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}