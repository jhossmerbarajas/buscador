-- Creación de la base de datos
CREATE DATABASE jhossweb;
-- Usar la base de datos
USE jhossweb;

-- Creaion de la tabla
CREATE TABLE search (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nameUser VARCHAR(10) NOT NULL,
    lastName VARCHAR(10) NOT NULL,
    product VARCHAR(20) NOT NULL,
    price INT NOT NULL,
    pais VARCHAR(20) NOT NULL
);

-- Descripcion de la tabla
DESCRIBE TABLE search;

-- Insertar datos en la base de datos
INSERT INTO search (nameUSer, lastName, product, price, pais) VALUES ('David', 'Barajas', 'PC', 25000, 'Colombia');
INSERT INTO search (nameUSer, lastName, product, price, pais) VALUES ('María', 'Muñoz', 'SmarthPhone', 15000, 'USA');
INSERT INTO search (nameUSer, lastName, product, price, pais) VALUES ('Juan', 'Acevedo', 'Laptop', 25000, 'Colombia');
INSERT INTO search (nameUSer, lastName, product, price, pais) VALUES ('Alex', 'Piña', 'Microfono', 10000, 'Venezuela');