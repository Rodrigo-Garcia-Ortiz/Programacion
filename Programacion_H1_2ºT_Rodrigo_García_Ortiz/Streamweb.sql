create database StreamWeb;
use StreamWeb;

create table usuarios(
id_usuario int auto_increment primary key unique,
nombre varchar(50),
apellido varchar(50),
correo varchar(100) unique,
telefono int,
edad int
);

create table paquetes(
id_usuario int auto_increment primary key unique,
plan varchar(50),
paquete varchar(50),
duracion varchar(50),
coste float
);
