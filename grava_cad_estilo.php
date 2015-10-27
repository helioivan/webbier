<?php 

  include "conexao.php";
  
  $estilo = $_POST["nome_estilo"];
  
  $inserir = $conexao_pdo->prepare("INSERT INTO estilos (DESCRICAO_ESTILO) VALUES (?)");
  
	$dados = array($estilo);
	$cadastra = $inserir->execute($dados);
	
	header ("Location: ./pagina_cad_estilo.php");
	
 ?>