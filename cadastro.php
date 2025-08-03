<?php

    if (isset($_POST['submit'])) {
        include_once('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = $conexao->query("INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha')");

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <h1>Realize seu cadastro no formulário abaixo!</h1>

    <form action="cadastro.php" method="post">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        <input type="email" name="email" id="email" placeholder="Digite seu email">
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">

        <input type="submit" name="submit" id="submit" value="Enviar">
    </form>
</body>
</html>