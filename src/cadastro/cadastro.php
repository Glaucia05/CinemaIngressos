<?php
include_once("../../conexao.php");

$Nome=$_POST['nome'];
$Email=$_POST['email'];
$Senha=$_POST['senha'];
$Telefone=$_POST['telefone'];

$hash = password_hash($Senha, PASSWORD_DEFAULT);

$result = mysqli_query($conexao, "INSERT INTO cadastro(Nome, Email, Senha, Telefone) 
                                    VALUES('$Nome','$Email','$hash','$Telefone' )");




/* TESTE DE ENVIO DE DADOS PARA O BD
if ($result) {
    header("Location: ../inicio/inicio.html");
    exit;
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
} */


?>