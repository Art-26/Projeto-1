<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    .meuprojeto {
        text-align: center;
        margin-top: 100px;
    }
</style>
<body>
    <header>
        <h1>Home</h1>
        <nav>
            <a href="login.php">Login</a>
            <a href="cadastro.php">Cadastro</a>
        </nav>
    </header>
    <hr>
    <h1 class="meuprojeto">Bem vindo ao meu primeiro projeto com PHP e Banco de Dados.</h1>
</body>
</html>