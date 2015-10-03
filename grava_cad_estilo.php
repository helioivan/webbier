<?php 

  include "conexao.php";
  
  $estilo = $_POST["nome_estilo"];
  
  $inserir = $conexao_pdo->prepare("INSERT INTO estilos (descricao_estilo) VALUES (?)");
  
	$dados = array($cervejaria);
	$cadastra = $inserir->execute($dados);
	
	header ("Location: ./pagina_cad_estilo.html");
	
 ?>