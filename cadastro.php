<?php

include_once('conexao.php'); 



//se houver submit (Aperto do botão) cria variaveis que guardam as entradas
if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];


    //PROCESSOS DE VERIFICAÇÃO
    // ------------------------------
    // 1. VALIDAR NOME
    // ------------------------------
    if (empty($nome)) {
        die("ERRO: O nome não pode estar vazio!");
    }

    // ------------------------------
    // 2. VALIDAR EMAIL
    // ------------------------------
    if (empty($email)) {
        die("ERRO: O e-mail é obrigatório!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("ERRO: O e-mail informado é inválido!");
    }

    // Verificar e-mail duplicado
    $checkEmail = mysqli_query($conexao, "SELECT id_cadastro FROM Cadastro WHERE Email = '$email'");
    if (mysqli_num_rows($checkEmail) > 0) {
        die("ERRO: Este e-mail já está cadastrado!");
    }

    // ------------------------------
    // 3. VALIDAR SENHA
    // ------------------------------
    if (empty($senha)) {
        die("ERRO: A senha não pode estar vazia!");
    }

    if (strlen($senha) < 6) {
        die("ERRO: A senha precisa ter pelo menos 6 caracteres!");
    }

    // ------------------------------
    // 4. VALIDAR TELEFONE
    // ------------------------------
    if (empty($telefone)) {
        die("ERRO: O telefone não pode estar vazio!");
    }

    if (!preg_match('/^[0-9]{8,15}$/', $telefone)) {
        die("ERRO: O telefone deve conter apenas números (8 a 15 dígitos)!");
    }

    // Verificar telefone duplicado
    $checkTelefone = mysqli_query($conexao, "SELECT id_cadastro FROM Cadastro WHERE Telefone = '$telefone'");
    if (mysqli_num_rows($checkTelefone) > 0) {
        die("ERRO: Este telefone já está cadastrado!");
    }



//cria uma váriavel que insere as entradas no BD
 $sql = "INSERT INTO Cadastro (Nome, Email, Senha, Telefone)
 VALUES ('$nome', '$email', '$senha', '$telefone')";

//variavel que conecta o resultado ao BD
 $result = mysqli_query($conexao, $sql);


//se ouver a inserção dos dados na tabela:
 if ($result) {
//redireciona para a página de sucesso
 echo("CADASTRO EFETUADO COM SUCESSO");
 exit(); 
 
 } 
 
 else {

 die("ERRO DE INSERÇÃO: " . mysqli_error($conexao));
  

 }
}



?>