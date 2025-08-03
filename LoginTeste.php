<?php
    session_start();
     if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = $conexao->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

        if ($result->num_rows > 0) {

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header ('location: painel.php');
        } else {

            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header ('location: login.php');
        }
     } else {
        header ('location: login.php');
     }

?>