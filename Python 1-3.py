nnn = input("Introduzca un número entero positivo: ")
nnn = int(nnn)
n = 0
suma = 0

for n in range(1, nnn+1):
 suma = suma + n
 
print(f"La suma de los {nnn} primeros números naturales positivos es {suma}")
