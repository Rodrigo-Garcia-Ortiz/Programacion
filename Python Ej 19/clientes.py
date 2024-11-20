from bdd import conectar

def crear_cliente(nombre, edad, tipo_membresia):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO clientes (nombre, edad, tipo_membresia) VALUES (%s, %s, %s)"
    cursor.execute(consulta, (nombre, edad, tipo_membresia))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def leer_clientes():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("select * from clientes")
    clientes = cursor.fetchall()
    cursor.close
    conexion.close
    return clientes

def actualizar_cliente(id_cliente, nuevo_nombre, nueva_edad, nuevo_tipo_membresia):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "UPDATE clientes SET nombre = %s, edad = %s, tipo_membresia = %s where id_cliente = %s"
    cursor.execute(consulta, (nuevo_nombre, nueva_edad, nuevo_tipo_membresia, id_cliente))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def borrar_cliente(id_cliente):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "delete from clientes where id_cliente = %s"
    cursor.execute(consulta, (id_cliente,))
    conexion.commit()
    consulta = "delete from inscripciones where id_cliente = %s"
    cursor.execute(consulta, (id_cliente,))
    conexion.commit()
    cursor.close()
    conexion.close()