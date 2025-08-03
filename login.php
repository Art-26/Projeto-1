<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    h1 {
        text-align: center;
        margin-top: 50px;
    }
    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(2, 0, 126, 1);
        width: auto;
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

    p {
        text-align: center;
    }

    p a {
        text-decoration: none;
        color:rgba(157, 158, 255, 1);
    }

    p a:hover {
        text-decoration: underline;
        color: rgba(255, 69, 69, 1);
    }

    @media screen and (max-width: 600px) {
        .container {
            width: 80%;
        }
        
    }

</style>
<body>
    <h1>Faça seu Login!</h1>
    <div class="container">
    <form action="LoginTeste.php" method="post">
        <input type="email" name="email" id="email" placeholder="Digite seu email" required>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
        <input type="submit" name="submit" id="submit" value="Enviar">

        <p>Ainda nao possui uma conta? <a href="cadastro.php">Cadastre-se</a></p>
        
        <p>Voltar para o <a href="index.php">Home</a></p>
    </form>
    </div>
</body>
</html>