import numpy as np

matriz = np.arange(1, 17).reshape((4, 4))
print("Matriz inicial:")
print(matriz)

print("Columna extraída:")
print(matriz[:, 2])