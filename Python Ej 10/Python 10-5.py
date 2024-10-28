import numpy as np

matriz = np.random.randint(1, 51, size = (4, 3))
print("Matriz inicial:")
print(matriz)

valor_maximo = np.max(matriz, axis = 0)
print("Valor máximo de cada columna:")
print(valor_maximo)