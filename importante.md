Vc so consegue ver funcionando abrindo assim!
http://localhost/cinemaingressos/login.html <- trocando essa parte final pela pagina que vc quer acessar

para o BD funcionar a pasta do seu projeto precisa estar dentro do xampp dentro do htdocs (o php so funciona la dentro). Verifique se o apache do xampp esta ligado.

IMPORTANTE: O projeto em si não trata questões de segurança.

Banco de dados utilizado:


CREATE DATABASE cinemaIngressos;

CREATE TABLE Cadastro (
id_cadastro INT PRIMARY KEY AUTO_INCREMENT,
Nome VARCHAR(100) NOT NULL,
Email VARCHAR(100) UNIQUE NOT NULL,
Senha varchar(6) NOT NULL,
Telefone VARCHAR(20) UNIQUE NOT NULL
);


