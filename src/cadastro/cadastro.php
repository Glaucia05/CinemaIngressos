<?php
include_once("../../conexao.php");

$Nome=$_POST['nome'];
$Email=$_POST['email'];
$Senha=$_POST['senha'];
$Telefone=$_POST['telefone'];
$senhaConfirme = $_POST['senhaConfirme'];

if (!empty($Nome) && !empty($Senha)) {
    // Verificação de igualdade (Case Sensitive)
    if ($Nome === $Senha ) {
        echo "<h2>Entrada inválida!</h2>";
        echo "<p>Por segurança, a senha não pode ser igual ao nome de usuário.</p>";
        echo "<a href='cadastro.html'>Voltar para o cadastro</a>";
        exit();
    }
    
    if($senhaConfirme !== $Senha ){
        echo "<h2>Entrada inválida!</h2>";
        echo "As senhas devem ser iguais!";
        echo "<a href='cadastro.html'>Voltar para o cadastro</a>";
        exit();

    } 
    else {
            echo 'Entrada valida';
            $hash = password_hash($Senha, PASSWORD_DEFAULT);
            $result = mysqli_query($conexao, "INSERT INTO cadastro(Nome, Email, Senha, Telefone) 
                                    VALUES('$Nome','$Email','$hash','$Telefone' )");
    }
}








/* TESTE DE ENVIO DE DADOS PARA O BD
if ($result) {
    header("Location: ../inicio/inicio.html");
    exit;
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
} */


?>