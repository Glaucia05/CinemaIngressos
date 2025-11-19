<?php
include_once('conexao.php'); 

//cadastro sem proteção

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
 //caso n da erro
 else {

 die("ERRO DE INSERÇÃO: " . mysqli_error($conexao));
 }
}



?>