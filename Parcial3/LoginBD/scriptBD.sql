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
