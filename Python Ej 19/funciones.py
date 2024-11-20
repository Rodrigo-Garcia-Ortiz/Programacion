from clientes import crear_cliente, leer_clientes, actualizar_cliente, borrar_cliente
from actividades import crear_actividad, leer_actividades, actualizar_actividad, borrar_actividad
from entrenadores import crear_entrenador, leer_entrenadores, actualizar_entrenador, borrar_entrenador
from inscripciones import crear_inscripcion, leer_inscripciones, borrar_inscripcion

def mostrar_menu():
    print("\n=== Gestión del Centro Deportivo ===")
    print("1. Gestión de Clientes")
    print("2. Gestión de Actividades")
    print("3. Gestión de Entrenadores")
    print("4. Gestión de Inscripciones")
    print("5. Salir")
    
def menu_clientes():
    print("\n=== Gestión de Clientes ===")
    print("1. Registrar nuevo cliente")
    print("2. Leer clientes existentes")
    print("3. Actualizar un cliente")
    print("4. Eliminar un cliente")
    print("5. Volver")
    
def menu_actividades():
    print("\n=== Gestión de Actividades ===")
    print("1. Registrar nueva actividad")
    print("2. Leer actividades existentes")
    print("3. Actualizar una actividad")
    print("4. Eliminar una actividad")
    print("5. Volver")
    
def menu_entrenadores():
    print("\n=== Gestión de Entrenadores ===")
    print("1. Registrar nuevo entrenador")
    print("2. Leer entrenadores existentes")
    print("3. Actualizar un entrenador")
    print("4. Eliminar un entrenador")
    print("5. Volver")
    
def menu_inscripciones():
    print("\n=== Gestión de Inscripciones ===")
    print("1. Registrar nueva inscripción")
    print("2. Leer inscripciones existentes")
    print("3. Eliminar una inscripción")
    print("4. Volver")
    
    
    
def ejecutar_opcion_clientes(opcion):
    
    if opcion == 1:
        nombre = input("Ingrese el nombre del nuevo cliente: ")
        edad = int(input("Ingrese la edad del nuevo cliente: "))
        tipo_membresia = input("Ingrese el tipo de membresía del nuevo cliente: ")
        crear_cliente(nombre, edad, tipo_membresia)
        print("Cliente registrado exitosamente.")
      
    elif opcion == 2:
        clientes = leer_clientes()
        print("\nListado de Clientes:")
        for id_cliente, nombre, edad, tipo_membresia in clientes:
            print(f"ID: {id_cliente}, Nombre: {nombre}, Edad: {edad} Membresía: {tipo_membresia}")

    elif opcion == 3:
        id_cliente = int(input("Ingrese el ID del cliente a actualizar: "))
        nuevo_nombre = input("Ingrese el nuevo nombre del cliente: ")
        nueva_edad = input("Ingrese la nueva edad del cliente: ")
        nuevo_tipo_membresia = input("Ingrese el nuevo tipo de membresía del cliente: ")
        actualizar_cliente(id_cliente, nuevo_nombre, nueva_edad, nuevo_tipo_membresia)
        print("Cliente actualizado exitosamente.")
        
    elif opcion == 4:
        id_cliente = int(input("Ingrese el ID del cliente a eliminar: "))
        borrar_cliente(id_cliente)
        print("Cliente eliminado exitosamente.")
        
    elif opcion == 5:
        return
        
    else:
        print("Opción no válida. Intente de nuevo.")



def ejecutar_opcion_actividades(opcion):
    if opcion == 1:
        nombre_actividad = input("Ingrese el nombre de la nueva actividad: ")
        horario = input("Ingrese el horario de la nueva actividad: ")
        duracion = int(input("Ingrese la duración en horas de la nueva actividad: "))
        id_entrenador = int(input("Ingrese el ID del entrenador de la nueva actividad: "))
        crear_actividad(nombre_actividad, horario, duracion, id_entrenador)
        print("Actividad registrada exitosamente.")
        
    elif opcion == 2:
        actividades = leer_actividades()
        print("\nListado de Actividades:")
        for id_actividad, nombre_actividad, horario, duracion, id_entrenador in actividades:
            print(f"ID: {id_actividad}, Nombre: {nombre_actividad}, Horario: {horario} Duración: {duracion}, Entrenador: {id_entrenador}")
            
    elif opcion == 3:
        id_actividad = int(input("Ingrese el ID de la actividad a actualizar: "))
        nuevo_nombre = input("Ingrese el nuevo nombre de la  actividad: ")
        nuevo_horario = input("Ingrese el nuevo horario de la actividad: ")
        nueva_duracion = int(input("Ingrese la nueva duración de la actividad: "))
        nuevo_entrenador= int(input("Ingrese el nuevo entrenador de la actividad: "))
        actualizar_actividad(id_actividad, nuevo_nombre, nuevo_horario, nueva_duracion, nuevo_entrenador)
        print("Actividad actualizada exitosamente.")
        
    elif opcion == 4:
        id_actividad = int(input("Ingrese el ID de la actividad a eliminar: "))
        borrar_actividad(id_actividad)
        print("Actividad eliminada exitosamente.")
        
    elif opcion == 5:
        return
    
    else:
        print("Opción no válida. Intente de nuevo.")



def ejecutar_opcion_entrenadores(opcion):
    if opcion == 1:
        nombre = input("Ingrese el nombre del nuevo entrenador: ")
        especialidad = input("Ingrese la especialidad del nuevo entrenador: ")
        crear_entrenador(nombre, especialidad)
        print("Entrenador registrado exitosamente.")
        
    elif opcion == 2:
        entrenadores = leer_entrenadores()
        print("\nListado de Entrenadores:")
        for id_entrenador, nombre, especialidad in entrenadores:
            print(f"ID: {id_entrenador}, Nombre: {nombre}, Especialidad: {especialidad}")
            
    elif opcion == 3:
        id_entrenador = int(input("Ingrese el ID del entrenador a actualizar: "))
        nuevo_nombre = input("Ingrese el nuevo nombre del entrenador: ")
        nueva_especialidad = input("Ingrese la nueva especialidad del entrenador: ")
        actualizar_entrenador(id_entrenador, nuevo_nombre, nueva_especialidad)
        print("Entrenador actualizado exitosamente.")
        
    elif opcion == 4:
        id_entrenador = int(input("Ingrese el ID del entrenador a eliminar: "))
        borrar_entrenador(id_entrenador)
        print("Entrenador eliminado exitosamente.")
        
    elif opcion == 5:
        return
    
    else:
        print("Opción no válida. Intente de nuevo.")
    



def ejecutar_opcion_inscripciones(opcion):
    if opcion == 1:
        id_cliente = int(input("Ingrese el ID del cliente de la inscripción: "))
        id_actividad = int(input("Ingrese el ID de la actividad de la inscripción: "))
        crear_inscripcion(id_cliente, id_actividad)
        print("Inscripción registrada exitosamente.")
        
    elif opcion == 2:
        entrenadores = leer_inscripciones()
        print("\nListado de Inscripciones:")
        for id_inscripcion, id_cliente, nombre, edad, tipo_membresia, id_actividad, nombre_actividad, horario, duracion, id_entrenador in entrenadores:
            print(f"ID: {id_inscripcion}, ID cliente: {id_cliente}, Cliente: {nombre}, Edad: {edad}, Membresía: {tipo_membresia}, ID actividad: {id_actividad}, Actividad: {nombre_actividad}, Horario: {horario} Duración: {duracion}, Entrenador: {id_entrenador}")
    
    elif opcion == 3:
        id_inscripcion = int(input("Ingrese el ID de la inscripción a eliminar: "))
        borrar_inscripcion(id_inscripcion)
        print("Inscripción eliminada exitosamente.")
        
    elif opcion == 4:
        return
    
    else:
        print("Opción no válida. Intente de nuevo.")