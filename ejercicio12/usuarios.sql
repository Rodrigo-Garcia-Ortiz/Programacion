create table usuarios(
id_usuario int primary key auto_increment,
usuario varchar(50),
contraseña varchar(50),
rol varchar(50)
);

insert into usuarios (usuario, contraseña, rol) values ('Rodrigo', '', 'admin');
