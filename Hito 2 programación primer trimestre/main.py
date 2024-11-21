import menus


def main():
    continuar = True
    while continuar:
        menus.mostrar_menu()  #Muestra el menú 
        try:
            opcion = int(input("Seleccione una opción: ")) #Elije una opción
            
            menus.ejecutar_opcion(opcion) #Ejecuta la opción escogida
                
        except ValueError:
            print("Error: Debe ingresar un número válido.")
    
if __name__ == "__main__":
    main()