DROP DATABASE IF EXISTS REGISTROS;	
CREATE DATABASE REGISTROS;

USE REGISTROS;


CREATE TABLE USARIOS(

ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
NOME VARCHAR(100) NOT NULL,
SOBRENOME VARCHAR(100) NOT NULL,
EMAIL VARCHAR(100) NOT NULL,
SENHA VARCHAR(45) NOT NULL
 
);