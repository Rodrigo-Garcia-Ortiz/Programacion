create database recetas;
use recetas;

create table recetas(
id_receta int primary key auto_increment,
nombre varchar(100),
elaboracion varchar(2000),
ingredientes varchar(2000)
);