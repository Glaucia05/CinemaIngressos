<?php

include_once("../../conexao.php");


$Email = $_POST['email'] ?? ''; 
$Senha = $_POST['senha'] ?? '';

 // 1. Buscar o usuário no banco 
$Senha_banco = mysqli_query($conexao, "SELECT Senha FROM cadastro WHERE Email = '$Email'");
// valor de exemplo 

$dado = mysqli_fetch_assoc($Senha_banco);

// 2. Verificar a senha 
if (password_verify($Senha, $dado['Senha'])) {    
	// Senha correta    
	echo "Login permitido";  

	// Aqui você inicia a sessão, salva dados na session, etc. 
  
} else {    
	// Senha incorreta    
	echo "E-mail ou senha inválidos"; 
}



/* echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['submit'])) {
    echo $_POST['email'];
    echo "<br>";
    echo $_POST['senha'];
} */


    












?>
