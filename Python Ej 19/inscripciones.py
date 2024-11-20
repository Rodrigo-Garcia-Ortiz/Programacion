from bdd import conectar

def crear_inscripcion(id_cliente, id_actividad):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO inscripciones (id_cliente, id_actividad) VALUES (%s, %s)"
    cursor.execute(consulta, (id_cliente, id_actividad))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def leer_inscripciones():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("select inscripciones.id_inscripcion, clientes.*, actividades.* from (inscripciones inner join clientes) inner join actividades where inscripciones.id_cliente = clientes.id_cliente and inscripciones.id_actividad = actividades.id_actividad")
    clientes = cursor.fetchall()
    cursor.close
    conexion.close
    return clientes

def borrar_inscripcion(id_inscripcion):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "delete from inscripciones where id_inscripcion = %s"
    cursor.execute(consulta, (id_inscripcion,))
    conexion.commit()
    cursor.close()
    conexion.close()