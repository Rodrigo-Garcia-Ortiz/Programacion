CREATE DATABASE JAVAPOO;
USE JAVAPOO;

create table clientes (
id_cliente INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(100),
email VARCHAR(100),
telefono VARCHAR(15)
);

create table proveedores (
id_proveedor INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(100),
cif VARCHAR(20),
telefono VARCHAR(15)
);

create table articulos (
id_articulo INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(100),
precio_unitario DECIMAL(10,2),
stock INT
);

create table facturas (
id_factura INT PRIMARY KEY AUTO_INCREMENT,
id_proveedor INT,
fecha DATE,
total DECIMAL(10,2),
FOREIGN KEY (id_proveedor) references proveedores (id_proveedor)
);

create table ventas (
id_venta INT PRIMARY KEY AUTO_INCREMENT,
id_cliente INT,
id_articulo INT,
cantidad INT,
fecha_venta DATE,
FOREIGN KEY (id_cliente) references clientes (id_cliente),
FOREIGN KEY (id_articulo) references articulos (id_articulo)
);

INSERT INTO Clientes (nombre, email, telefono) VALUES
('Juan Pérez', 'juanp@gmail.com', '600123456'),
('Lucía Gómez', 'lucia.gomez@gmail.com', '611987654');

INSERT INTO Proveedores (nombre, cif, telefono) VALUES
('TechDistribuciones S.A.', 'A12345678', '913456789'),
('HardwarePro', 'B98765432', '914789123');

INSERT INTO Articulos (nombre, precio_unitario, stock) VALUES
('Monitor 24"', 149.99, 20),
('Teclado Mecánico', 69.90, 35);

INSERT INTO Facturas (id_proveedor, fecha, total) VALUES
(1, '2025-05-01', 3000.00),
(2, '2025-05-03', 1500.00);

INSERT INTO Ventas (id_cliente, id_articulo, cantidad, fecha_venta) VALUES
(1, 1, 2, '2025-05-05'),
(2, 2, 1, '2025-05-06');
