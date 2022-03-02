<?php

   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "cursophp";

   $conn = new mysqli($host, $user, $pass, $db);

   //Assunto da aula:
   $q = "SELECT * FROM itens";

   $result = $conn->query($q);

   $conn->close();

   //Obter apenas um resultado da tabela:
   $item = $result->fetch_assoc();

   //Obter todos os resultados da tabela:
   $itens = $result->fetch_all();

   print_r($itens);

?>