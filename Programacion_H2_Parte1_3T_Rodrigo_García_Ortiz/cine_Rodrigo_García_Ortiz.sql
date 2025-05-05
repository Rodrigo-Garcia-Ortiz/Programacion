CREATE DATABASE cine_Rodrigo_García_Ortiz;
USE cine_Rodrigo_García_Ortiz;

CREATE TABLE categorias (
id_categoria INT PRIMARY KEY AUTO_INCREMENT,
nombre_categoria VARCHAR(50) NOT NULL
);

CREATE TABLE peliculas (
 id_pelicula INT PRIMARY KEY NOT NULL,
 titulo VARCHAR(50) NOT NULL,
 categoria INT NOT NULL,
 director VARCHAR(50) NOT NULL,
 publicacion INT NOT NULL,
 FOREIGN KEY (categoria) REFERENCES categorias(id_categoria)
);

INSERT INTO categorias (nombre_categoria) VALUES ('Comedia');
INSERT INTO categorias (nombre_categoria) VALUES ('Acción');

INSERT INTO peliculas VALUES (1, 'Los siete samuráis', 2, 'Akira Kurosawa', 1954);
INSERT INTO peliculas VALUES (2, 'Mortadelo y Filemón contra Jimmy el cachondo', 1, 'Javier Fesser', 2014);
INSERT INTO peliculas VALUES (3, 'La Lego película', 1, 'Phil Lord', 2014);
INSERT INTO peliculas VALUES (4, 'Bullet Train', 2, 'David Leitch', 2022);
INSERT INTO peliculas VALUES (5, 'Spider-Man: Into the Spiderverse', 2, 'Peter Ramsey', 2018);