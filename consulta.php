	
<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect('localhost', 'root', '', 'lojax');


 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "lojax");
 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM cadastro2") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
 



 //pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "Nome: ".$aux["nome"]."<br />"; 
  echo "cpf: ".$aux["email"]."<br />"; 
}
 

?>