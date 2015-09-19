<?php 
  
  $detalhes_pdo = 'mysql:host=' . $host_db . ';dbname='. $base_dados;

  try{
	  
	  $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd);
  }catch(PDOException $e){
	  print "Erro: ".$e->getMessage()."<br/>";
	  die();
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexão</title>
</head>

</head>
<body>
</body>
</html>