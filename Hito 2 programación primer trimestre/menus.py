from funciones import crear_cliente, leer_clientes, buscar_cliente, mostrar_productos, comprar, crear_pedido, seleccionar_pedido

def mostrar_menu(): #Muestra el menú
    print("\n=== Menú de opciones ===")
    print("1. Registrar clientes")
    print("2. Ver y buscar clientes")
    print("3. Realizar compra")
    print("4. Seguimiento de compra")
    print("5. Salir")

def ejecutar_opcion(opcion):#Realiza la opción asignada
    match opcion:
        case 1: #Registra un cliente con los datos introducidos
            nombre = input("Ingrese el nombre del nuevo cliente: ")
            telefono = int(input("Ingrese el teléfono del nuevo cliente: "))
            direccion = input("Ingrese la dirección del nuevo cliente: ")
            crear_cliente(nombre, telefono, direccion) 
            print("Cliente registrado exitosamente.")

        case 2: #Muestra los clientes
            clientes = leer_clientes()
            print("\nListado de Clientes:")
            for id_cliente, nombre, telefono, direccion in clientes:
                print(f"ID: {id_cliente}, Nombre: {nombre}, Teléfono: {telefono} Dirección: {direccion}")
            busqueda = (input("Introduzca el ID del cliente que quiere buscar: "))
            print(buscar_cliente(busqueda))
        
        case 3: #Registra un pedido asignado al cliente escogido con los productos escogidos
            id_cliente = int(input("Indique el cliente que realizará la compra: ")) #Escoge el cliente
            productos = mostrar_productos() #Selecciona los datos del producto
            print("\nLista de Productos:")
            for id_producto, nombre_producto, precio_producto in productos: #Muestra los productos
                print(f"ID: {id_producto} Nombre: {nombre_producto} Precio: {precio_producto}€")
            precio_total = 0
            numero_objetos = 0
            while True:
                producto = int(input("Introduce el ID del producto que quieres añadir al pedido: ")) #Introduce un producto al pedido
                if producto == 0:
                    break
                else:
                    precio_total = precio_total + comprar(producto)
                    numero_objetos = numero_objetos + 1
            print(f"El precio total del pedido es: {precio_total}€")
            crear_pedido(id_cliente, precio_total, numero_objetos) #Registra un pedido
            print(f"El número del pedido es: {crear_pedido(id_cliente, precio_total, numero_objetos)}")

        case 4: #Muestra el número del pedido creado
            pedido = int(input("Introduce el ID del pedido deseado: "))
            print(seleccionar_pedido(pedido))
            
        case _: #Introduces un número sin opción asignada
            print("Opción inválida")