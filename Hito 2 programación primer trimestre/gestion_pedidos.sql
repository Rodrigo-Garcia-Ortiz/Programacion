drop database if exists gestion_pedidos;
create database gestion_pedidos;
use gestion_pedidos;

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    telefono int,
    direccion varchar(50)
);

create table productos (
id_producto INT AUTO_INCREMENT PRIMARY KEY,
nombre_producto varchar(50),
precio_producto float
);

create table pedidos (
id_pedido INT AUTO_INCREMENT PRIMARY KEY,
cliente int,
precio float,
numero_objetos int,
FOREIGN KEY (cliente) REFERENCES clientes (id_cliente)
);

create table detalles (
id_detalle INT AUTO_INCREMENT PRIMARY KEY,
pedido int,
producto varchar(50),
precio float,
FOREIGN KEY (pedido) REFERENCES pedidos (id_pedido),
FOREIGN KEY (producto) REFERENCES productos (nombre_producto),
FOREIGN KEY (precio) REFERENCES productos (precio_producto)
);

INSERT INTO productos (nombre_producto, precio_producto) VALUES ('Laptop HP', 799.99);
INSERT INTO productos (nombre_producto, precio_producto) VALUES ('Smartphone Samsung', 499.50);
INSERT INTO productos (nombre_producto, precio_producto) VALUES ('Auriculares Sony', 89.99);
INSERT INTO productos (nombre_producto, precio_producto) VALUES ('Monitor Dell', 159.75);
INSERT INTO productos (nombre_producto, precio_producto) VALUES ('Teclado Logitech', 29.99);

select*from pedidos;
select*from productos