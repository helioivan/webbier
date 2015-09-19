<?php

  include('conexao.php');

  $base_dados = 'actm';
  $usuario_bd = 'root';
  $senha_bd   = 'vertrigo';
  $host_bd    = 'localhost';
  
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web Bier</title>
</head>
<body>

  <table style="width:100%" border="1">
    <tr>
      <td>
        <div align="center">Descrição dos estilos</div>
      </td>
    </tr>
  </table>
  
  <table style="width:100%" border = "1">
    <tr>
      <td>Pilsen</td>
      <td>Weiss</td> 
      <td>Wittbier</td>
      <td>Ipa</td>
      <td>Stout</td>
    </tr>
  </table>
 
   <h1 align="center">História da cerveja</h1>
   <p> Nesta página será mostrado um pouco da história das cervejas, desde o seu surgimento até os dias atuais</p> 
   <div><a href="pagina_cadastros.html">Cadastros</a></div>

</body>
</html>
