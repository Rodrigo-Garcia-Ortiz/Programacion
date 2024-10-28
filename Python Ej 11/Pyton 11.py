import numpy as np
import random
intentos = 0

tablero = np.zeros((5, 5))
tablero_falso = np.zeros((5, 5))

tablero[random.randint(0, 4), random.randint(0, 4)] = 1
print(tablero)
while True:
    intentos = intentos + 1
    
    print(tablero_falso)
    
    fila =input("Introduzca la fila a atacar: ")
    fila = int(fila)
    
    columna =input("Introduzca la columna a atacar: ")
    columna = int(columna)
    
    print(f"El jugador ataca la posición ({fila}, {columna})")
    
    match tablero[fila, columna]:
        
        case 1:
            print("¡Has acertado!")
            print(tablero)
            break
        
        case 0: 
            print("Agua")
            tablero_falso[fila, columna] = -1
            tablero[fila, columna] = -1
            
        case -1:
            print("Posición ya escogida")
        
print(f"Has necesitado {intentos} intentos")