<?php 

  include "conexao.php";
  
  $cerveja    = $_POST["nome_cerveja"];
  $cervejaria = $_POST["nome_cervejaria"];
  $ibu        = $_POST["ibu_cerveja"];
  $abv        = $_POST["abv_cerveja"];
  $taca       = $_POST["taca_cerveja"];
  $prato      = $_POST["prato"];
  $estilo     = $_POST["estilo"];
  
  $inserir = $conexao_pdo->prepare("INSERT INTO cervejas (DESCRICAO_CERVEJA, HBV, IBU, PRATO_CERVEJA, TACA_CERVEJA, CERVEJARIA_CERVEJA) VALUES (?, ?, ?, ?, ?, ?)");
  
	$dados = array($cerveja, $abv, $ibu, $prato, $taca, $cervejaria);
	$cadastra = $inserir->execute($dados);
	
	header ("Location: ./pagina_cad_cerveja.php");
	
?>