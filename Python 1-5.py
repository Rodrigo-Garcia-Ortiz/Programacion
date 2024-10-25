import random
numero = random.randint(1, 100)

respuesta = 0

while respuesta != numero:
    
    respuesta = input("Adivina el número: ")
    respuesta = int(respuesta)

    if respuesta < numero:
      print("Más alto")
      
    elif respuesta > numero:
      print("Más bajo")
      
print("Respuesta correcta")
    