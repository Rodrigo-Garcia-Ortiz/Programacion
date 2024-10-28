import numpy as np

matriz = np.array([[1, 7, 4, 5], [2, 6, 1, 8], [4, 8, 3, 6]])
print("Matriz inicial:")
print(matriz)

promedio = np.mean(matriz, axis = 1)
print("Promedio de las filas:")
print(promedio)