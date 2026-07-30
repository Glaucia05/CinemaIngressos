<?php
//file de conexão

$dbHost = 'localhost'; 
$dbUsername ='root';
$dbPassword = '123456';  
$dbName= 'cinemaIngressos'; 

//cria uma variável de conexão
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//if($conexao->connect_errno){ echo 'Erro';} else{ echo 'Coonexão efetuada com sucesso!'; }




?>

