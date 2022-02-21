<?php

   //Verificando se existe a requisição dos parâmetros:
   if (isset($_GET['nome'])) {
      $nome = $_GET['nome'];
      $idade = $_GET['idade'];
   } else {
      $nome = "Padrão";
      $idade = "Padrão";
   }

?>

<h1>O seu nome é <?php echo $nome; ?>, e você tem <?php echo $idade ?> anos!</h1>