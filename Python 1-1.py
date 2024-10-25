n1 = input("Introduzca el primer número: ")
n2 = input("Introduzca el segundo número: ")
n1 = int(n1)
n2 = int(n2)
operacion = input("Introduzca la operación deseada:")
resultado = 0

match operacion:
    
    case "suma":
     resultado = n1 + n2
     print(f"El resultado de la suma es {resultado}")
     
    case "resta":
     resultado = n1 - n2
     print(f"El resultado de la resta es {resultado}")
     
    case "multiplicación":
     resultado = n1 * n2
     print(f"El resultado de la multiplicación es {resultado}")
     
    case "división":
     if n2 == 0:
      print("Operación imposible")
     else:
      resultado = n1 / n2
      print(f"El resultado de la división es {resultado}")
      
    case _:
        print("Operación no permitida")