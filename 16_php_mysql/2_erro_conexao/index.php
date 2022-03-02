<?php

   $host = "localhost";
   $user = "root";
   $pass = "SENHA ERRADA";
   $db = "cursophp";

   $conn = new mysqli($host, $user, $pass, $db);

   if($conn->connect_errno) {
      echo "Erro na conexão <br>";//Aviso ao usuário
      echo "Erro: " . mysqli_connect_errno();//Função que mostra o tipo do erro
      //Uma outra forma de exibir esse erro é através do comando: $conn->connect_error();
   }

?>