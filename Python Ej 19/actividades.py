from bdd import conectar

def crear_actividad(nombre_actividad, horario, duracion, id_entrenador):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO actividades (nombre_actividad, horario, duracion, id_entrenador) VALUES (%s, %s, %s, %s)"
    cursor.execute(consulta, (nombre_actividad, horario, duracion, id_entrenador))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def leer_actividades():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("select*from actividades")
    actividades = cursor.fetchall()
    cursor.close
    conexion.close
    return actividades

def actualizar_actividad(id_actividad, nuevo_nombre_actividad, nuevo_horario, nueva_duracion, nuevo_id_entrenador):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "UPDATE actividades SET nombre_actividad = %s, horario = %s,  duracion = %s, id_entrenador = %s WHERE id_actividad = %s"
    cursor.execute(consulta, (nuevo_nombre_actividad, nuevo_horario, nueva_duracion, nuevo_id_entrenador, id_actividad))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def borrar_actividad(id_actividad):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "delete from actividades where id_actividad = %s"
    cursor.execute(consulta, (id_actividad,))
    conexion.commit()
    consulta = "delete from inscripciones where id_actividad = %s"
    cursor.execute(consulta, (id_actividad,))
    conexion.commit()
    cursor.close()
    conexion.close()