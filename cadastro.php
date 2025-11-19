<?php

include_once('conexao.php'); 


mysqli_query($conexao, "DROP TABLE IF EXISTS Cadastro");

$sql = "
CREATE TABLE Cadastro (
id_cadastro INT PRIMARY KEY AUTO_INCREMENT,
Nome VARCHAR(100) NOT NULL,
Email VARCHAR(100) UNIQUE NOT NULL,
Senha VARCHAR(255) NOT NULL,
Telefone VARCHAR(20) UNIQUE NOT NULL
)";
if (mysqli_query($conexao, $sql)) {
    echo "Tabela recriada!";
} else {
    echo mysqli_error($conexao);
}



//se houver submit (Aperto do botão) cria variaveis que guardam as entradas
if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];

//cria uma váriavel que insere as entradas no BD
 $sql = "INSERT INTO Cadastro (Nome, Email, Senha, Telefone)
 VALUES ('$nome', '$email', '$senha', '$telefone')";

//variavel que conecta o resultado ao BD
 $result = mysqli_query($conexao, $sql);


//se ouver a inserção dos dados na tabela:
 if ($result) {
//redireciona para a página de sucesso
 header('Location: sucesso.html');

 exit(); 
 } 
 
 else {

 die("ERRO DE INSERÇÃO: " . mysqli_error($conexao));
  header('Location: erro.html');

 }
}



?>