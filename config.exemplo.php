<?php

$host="localhost";
$port=3306;
$socket="";
$user="Seu_Usuario";
$password="Sua_Senha";
$dbname="Seu_Banco_de_Dados";

$conexao = new mysqli($host, $user, $password, $dbname, $port, $socket);

?>