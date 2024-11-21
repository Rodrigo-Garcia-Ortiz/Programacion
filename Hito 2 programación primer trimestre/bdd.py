import mysql.connector

def conectar(): #Conecta con la base de datos
    conexion = mysql.connector.connect(
        host="localhost",    # Cambia según tu configuración
        user="root",      # Cambia según tu configuración
        password="curso",  # Cambia según tu configuración
        database="gestion_pedidos"
    )
    return conexion