from bdd import conectar

def crear_cliente(nombre, telefono, direccion): #Registra un cliente
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO clientes (nombre, telefono, direccion) VALUES (%s, %s, %s)"
    cursor.execute(consulta, (nombre, telefono, direccion))
    conexion.commit()
    cursor.close()
    conexion.close()

def leer_clientes(): #Muestra los clientes registrados
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("select * from clientes")
    clientes = cursor.fetchall()
    cursor.close()
    conexion.close()
    return clientes

def buscar_cliente(busqueda): # Muestra un cliente concreto
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = """select nombre, telefono, direccion from clientes where id_cliente = %s"""
    cursor.execute(consulta, (busqueda,))
    resultado = cursor.fetchall()
    conexion.commit()
    cursor.close()
    conexion.close()
    return resultado

def mostrar_productos(): # Muestra los productos
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("select * from productos")
    productos = cursor.fetchall()
    conexion.commit()
    cursor.close()
    conexion.close()
    return productos

def comprar(producto): #Devuelve elprecio del producto escogido
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "select precio_producto from productos where id_producto = %s"
    cursor.execute(consulta, (producto,))   
    precio = cursor.fetchall()
    precio_producto = float(precio[0][0])
    conexion.commit()
    cursor.close()
    conexion.close()
    return precio_producto

def crear_pedido(cliente, precio, numero_objetos): #Registra un pedido
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO pedidos (cliente, precio, numero_objetos) VALUES (%s, %s, %s)"
    cursor.execute(consulta, (cliente, precio, numero_objetos))
    id_pedido = cursor.lastrowid
    conexion.commit()
    cursor.close()
    conexion.close()
    return id_pedido

def seleccionar_pedido(id_pedido): #Muestra los datos de un pedido, su cliente y sus detalles
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "select pedidos.*, clientes.* from pedidos inner join clientes on id_cliente = cliente where id_pedido = %s"
    cursor.execute(consulta, (id_pedido,))
    pedido = cursor.fetchall()
    conexion.commit()
    cursor.close()
    conexion.close()
    return pedido