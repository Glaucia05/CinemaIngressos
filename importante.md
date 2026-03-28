Projeto local!
Guia de funcionamento para projeto local:

http://localhost/cinemaingressos/login.html <- trocar parte final pela pagina que quer acessar

para o BD funcionar a pasta do seu projeto precisa estar dentro do xampp dentro do htdocs. Verifique se o apache do xampp esta ligado.


Banco de dados utilizado:


CREATE DATABASE cinemaIngressos;

CREATE TABLE Cadastro (
id_cadastro INT PRIMARY KEY AUTO_INCREMENT,
Nome VARCHAR(100) NOT NULL,
Email VARCHAR(100) UNIQUE NOT NULL,
Senha varchar(255) NOT NULL,
Telefone VARCHAR(20) UNIQUE NOT NULL
);


