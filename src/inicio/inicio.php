<?php

include_once("../../conexao.php");

$Email = $_POST['email'] ?? '';
$Senha = $_POST['senha'] ?? '';


//Prepared Statements
// Criando uma instrução preparada
$stmt = mysqli_stmt_init($conexao);

// Preparar a instrução
if (!mysqli_stmt_prepare($stmt, "SELECT Senha FROM cadastro WHERE Email = ?")) {
    echo "Instrução SQL falhou";
} else {

    // Associar o parâmetro
    mysqli_stmt_bind_param($stmt, "s", $Email);

    // Executar
    mysqli_stmt_execute($stmt);

    // Obter o resultado
    $result = mysqli_stmt_get_result($stmt);

    $dado = mysqli_fetch_assoc($result);

    if (password_verify($Senha, $dado['Senha'])) {
        echo "Login permitido";
    } else {
        echo "E-mail ou senha inválidos";
    }
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
