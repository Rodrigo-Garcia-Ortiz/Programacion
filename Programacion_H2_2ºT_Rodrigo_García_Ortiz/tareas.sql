create database tareas;
use tareas;

create table usuarios(
id_usuario int primary key auto_increment,
nombre varchar(50),
correo varchar(50) unique,
contrasena varchar(100)
);

create table tarea(
id_tarea int primary key auto_increment,
usuario int,
nombre varchar(50),
estado varchar(50),
foreign key (usuario) references usuarios (id_usuario)
);

insert into usuarios (nombre, correo, contrasena) values ('Rodrigo', 'rodrigo@ejemplo.com', '1234');
insert into usuarios (nombre, correo, contrasena) values ('Juan', 'juan@ejemplo.com', 'abcd');

insert into tarea (usuario, nombre, estado) values (1, 'EJ1', 'incompleta');
insert into tarea (usuario, nombre, estado) values (2, 'EJ2', 'incompleta');