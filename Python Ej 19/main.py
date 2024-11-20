import funciones


def main():
    continuar = True
    while continuar:
        funciones.mostrar_menu()  # Mostrar el menú de opciones
        try:
            menu = int(input("Seleccione un menú: "))
            
            if menu == 1:
                mismo_menu = True
                while mismo_menu:
                    funciones.menu_clientes()
                    opcion = int(input("Seleccione una opción: "))
                    funciones.ejecutar_opcion_clientes(opcion)
                    if opcion == 5:
                        mismo_menu = False
                        
            if menu == 2:
                mismo_menu = True
                while mismo_menu:
                    funciones.menu_actividades()
                    opcion = int(input("Seleccione una opción: "))
                    funciones.ejecutar_opcion_actividades(opcion)
                    if opcion == 5:
                        mismo_menu = False
                
            if menu == 3:
                mismo_menu = True
                while mismo_menu:
                    funciones.menu_entrenadores()
                    opcion = int(input("Seleccione una opción: "))
                    funciones.ejecutar_opcion_entrenadores(opcion)
                    if opcion == 5:
                        mismo_menu = False
                    
            if menu == 4:
                mismo_menu = True
                while mismo_menu:
                    funciones.menu_inscripciones()
                    opcion = int(input("Seleccione una opción: "))
                    funciones.ejecutar_opcion_inscripciones(opcion)
                    if opcion == 4:
                        mismo_menu = False
            
            if menu == 5:
                break
                
        except ValueError:
            print("Error: Debe ingresar un número válido.")
    
if __name__ == "__main__":
    main()