<?php

session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header ('location: login.php');
}

$logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Google+Sans+Code:ital,wght@0,300..800;1,300..800&display=swap');
    * {
        margin: 0;
        padding: 0;
        font-family: 'Google Sans Code', sans-serif;
    }

    body {
        background-color: rgba(57, 70, 182, 1);
        color: rgba(255, 255, 255, 1);
    }

    header {
        display: flex;
        background-image: linear-gradient(to right, rgba(2, 0, 126, 1), rgba(93, 116, 248, 1));
        color: white;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }

    nav a {
        background-color: rgba(243, 8, 8, 1);
        color: white;
        text-decoration: none;
        margin-right: 10px;
        padding: 10px;
        border-radius: 5px;
    }

    nav a:hover {
        background-color: rgba(243, 8, 8, 0.8);
    }

    hr {
        color: rgba(93, 116, 248, 1);
        border: 1px solid rgba(93, 116, 248, 1);
    }

    .bemvindo {
        margin-top: 50px;
        text-align: center;
    }
</style>
<body>
    <header>
        <h1>Painel</h1>
        <nav>
            <a href="sair.php">Sair</a>
        </nav>
    </header>
    <hr>
    <h1 class="bemvindo">Bem vindo ao Painel <?php echo $logado ?></h1>
</body>
</html>