<?php
$dbHost = 'localhost';          // O host do servidor (127.0.0.1 é igual a localhost)
$dbUsername ='root';
$dbPassword = '123456';               // Senha vazia (padrão do XAMPP)
$dbName= 'cinemaingressos';  // O NOME do banco de dados que você criou

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno){
    echo "ERRO: " . $conexao->connect_error;
} else {
    echo "CONEXÃO ESTABELECIDA";
}
?>














