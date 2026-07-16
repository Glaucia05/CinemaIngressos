<?php
include_once('conexao.php'); 




if (isset($_POST['email']) && isset($_POST['senha'])) {

    $email = $_POST['email'];
    $senhaDigitada = $_POST['senha']; // senha digitada

    $sql = "SELECT Senha FROM Cadastro WHERE Email = ?";
    $stmt = $conexao->prepare($sql);

    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $conexao->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $linha = $result->fetch_assoc();

    if ($linha) {

        $senhaBanco = $linha['Senha']; // senha salva no banco (texto simples)

        // Comparação simples
        if ($senhaDigitada === $senhaBanco) {

            echo "Login OK!";
            header("Location: inicio.html"); //redirecionar a pagina principal
            exit();

        } else {
            echo "Senha incorreta!";
        }

    } else {
        echo "E-mail não encontrado!";
    }

    $stmt->close();
}
?>
