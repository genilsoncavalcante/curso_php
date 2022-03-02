<?php

   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "cursophp";

   $conn = new mysqli($host, $user, $pass, $db);

   if ($conn->connect_errno) {
      echo "Erro na conexão! <br>";
      echo "Erro: " . $conn->connect_error;
   }

   //ASSUNTO DA AULA
   $sql = "SELECT * FROM itens";

   $result = $conn->query($sql);

   print_r($result);

   $conn->close();//Fechando a conexão com o BD, isso deixa a aplicação com o cliente mais performática. 

?>