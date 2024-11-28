<?php 

include 'conecta_mysql.inc';

$nome 		 = $_POST['nome'];
$email       = $_POST['email'];


$sql = "INSERT INTO cadastro2 VALUES";
$sql.= "('$nome','$email')";

if ($conn->query($sql) === TRUE) {
   // echo "NOME:  ".$nome."<br>CPF: ".$cpf."<br>";
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conn->close();
?>
