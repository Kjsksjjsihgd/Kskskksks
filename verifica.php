<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

$nome 			 = $_POST['nome'];
$email           = $_POST['email'];
$erro 			 = 0;

//Verifica se o campo nome não está em branco
if (empty($nome)) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}


if (empty($email)) {
	echo "Favor digitar o seu email corretamente.<br>";
	$erro = 1;
}

//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include 'armazena.inc';
}

 ?>
</body>
</html>