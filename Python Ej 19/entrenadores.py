from bdd import conectar

def crear_entrenador(nombre_entrenador, especialidad):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO entrenadores (nombre_entrenador, especialidad) VALUES (%s, %s)"
    cursor.execute(consulta, (nombre_entrenador, especialidad))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def leer_entrenadores():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("select*from entrenadores")
    entrenadores = cursor.fetchall()
    cursor.close
    conexion.close
    return entrenadores

def actualizar_entrenador(id_entrenador, nuevo_nombre_entrenador, nueva_especialidad):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "UPDATE entrenadores SET nombre_entrenador = %s, especialidad = %s WHERE id_entrenador = %s"
    cursor.execute(consulta, (nuevo_nombre_entrenador, nueva_especialidad, id_entrenador))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def borrar_entrenador(id_entrenador):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "delete from entrenadores where id_entrenador = %s"
    cursor.execute(consulta, (id_entrenador,))
    conexion.commit()
    consulta = "delete from actividades where id_entrenador = %s"
    cursor.execute(consulta, (id_entrenador,))
    conexion.commit()
    cursor.close()
    conexion.close()