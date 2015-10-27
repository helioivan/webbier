<?php 

  include "conexao.php";
  
  $taca = $_POST["nome_taca"];
  
  $inserir = $conexao_pdo->prepare("INSERT INTO tacas (descricao_taca) VALUES (?)");
  
	$dados = array($cervejaria);
	$cadastra = $inserir->execute($dados);
	
	header ("Location: ./pagina_cad_tacas.php");
	
 ?>