CREATE DATABASE IF NOT EXISTS RODRIGUEZOR;
USE RODRIGUEZOR;

CREATE TABLE USUARIOS
(
    numero_Usuario INT NOT NULL AUTO_INCREMENT,
    Nombre varchar(25) NOT NULL,
    APaterno varchar(25) DEFAULT NULL,
    AMaterno varchar(25) DEFAULT NULL,
    CURP varchar(20) DEFAULT NULL,
    PRIMARY KEY(numero_Usuario)
);

INSERT INTO USUARIOS (Nombre, APaterno, AMaterno, CURP)
VALUES
('Sergio', 'Rodirguez', 'Ortiz', '	ROVI490617HSPDSS05'),
('Pedro', 'Perez', 'Sanchez', 'MAHJ280603MSPRRV09'),
('Eduardo Josue', 'Martinez', 'Gutierrez', 'TOHA530902HSPRRN07');
