<?php
		//cria a conexao mysqli_connect('localizacao BD', 'usuario de acesso', 'senha', 'banco de dados')

$servername = "localhost";
$database = "lojax";
$username = "root";
$password = "";

$conn =  mysqli_connect("$servername","$username","","$database");

$conn->query("SET NAMES utf8"); //TODOS SUAS QUERYS(DADOS) VÃO VIR COM UTF-8 JÁ

// VERIFICANDO A CONEXÃO
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "";
?>