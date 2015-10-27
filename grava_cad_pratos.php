<?php 

  include "conexao.php";
  
  $prato = $_POST["nome_prato"];
  $ingrediente = $_POST["ingredientes_prato"];
  $cerveja = $_POST["nome_cerveja"];
  $estilo = $_POST["nome_estilo"];
  
  $inserir = $conexao_pdo->prepare("INSERT INTO cervejaria (DESCRICAO_PRATO, INGREDIENTE, CERVEJA, ESTILO) VALUES (?, ?, ?, ?)");
  
	$dados = array($cervejaria, $ingrediente, $cerveja, $estilo);
	$cadastra = $inserir->execute($dados);
	
	header ("Location: ./pagina_cad_pratos.php");
	
 ?>