CREATE DATABASE IF NOT EXISTS RODRIGUEZOR;
USE RODRIGUEZOR;

DROP TABLE IF EXISTS jefes;
CREATE TABLE IF NOT EXISTS jefes (
  numero_Usuario smallint(3) NOT NULL AUTO_INCREMENT,
  Nombre varchar(25) DEFAULT NULL,
  APaterno varchar(25) DEFAULT NULL,
  AMaterno varchar(25) DEFAULT NULL,
  Nickname varchar(10) DEFAULT NULL,
  Contraseña varchar(33) DEFAULT NULL,
  PRIMARY KEY (numero_Usuario)
);

INSERT INTO jefes (Nombre, APaterno, AMaterno, Nickname, Contraseña) VALUES
('Sergio', 'Rdz', 'Otz', 'Sergio00', '4792f201938827ae694085046e4422c4');

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
