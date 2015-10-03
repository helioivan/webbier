<?php 

  include "conexao.php";
  
  $cerveja    = $_POST["nome_cerveja"];
  $cervejaria = $_POST["nome_cervejaria"];
  $ibu        = $_POST["ibu_cerveja"];
  $abv        = $_POST["abv_cerveja"];
  $taca       = $_POST["taca_cerveja"];
  $prato      = $_POST["prato"];
  $estilo     = $_POST["estilo"];
  
  $inserir = $conexao_pdo->prepare("INSERT INTO cervejas (descricao_cerveja, hbv, ibu, prato_cerveja, taca_cerveja, cervejaria_cerveja) VALUES (?,?,?,?,?,?,?)");
  
	$dados = array($cervejaria);
	$cadastra = $inserir->execute($dados);
	
	header ("Location: ./pagina_cad_cerveja.html");
	
 ?>