<?php 

  include "conexao.php";
  
  $cervejaria = $_POST["pratos"];
  
  $inserir = $conexao_pdo->prepare("INSERT INTO cervejaria (descricao_cervejaria) VALUES (?)");
  
	$dados = array($cervejaria);
	$cadastra = $inserir->execute($dados);
	
	header ("Location: ./pagina_cad_pratos.html");
	
 ?>