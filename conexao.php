<?php
//file de conexão

$dbHost = 'localhost'; 
$dbUsername ='root';
$dbPassword = '123456';  
$dbName= 'cinemaingressos'; 

//cria uma variável de conexão
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
?>