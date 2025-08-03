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
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: rgba(57, 70, 182, 1);
        color: rgba(255, 255, 255, 1);
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(2, 0, 126, 1);
        width: 400px;
        margin: 30px auto;
        padding: 20px;
        border-radius: 10px;
    }

    input {
        width: 100%;
        height: 40px;
        margin-bottom: 30px;
        border-radius: 5px;
        border: none;
    }

    input:focus {
        outline: none;
        border: 1px solid rgba(243, 8, 8, 1);
    }

    #submit {
        background-color: rgba(243, 8, 8, 1);
        color: rgba(252, 252, 252, 1);
        cursor: pointer;
    }

    #submit:hover {
        background-color: rgba(172, 7, 7, 1);
        color: rgba(252, 252, 252, 1);
    }

</style>
<body>
    <h1>Realize seu cadastro no formulário abaixo!</h1>
    <div class="container">
    <form action="cadastro.php" method="post">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        <input type="email" name="email" id="email" placeholder="Digite seu email">
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">

        <input type="submit" name="submit" id="submit" value="Enviar">

    </form>
    </div>
</body>
</html>