<?php

   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "cursophp";

   $conn = new mysqli($host, $user, $pass, $db);
   //Assunto da aula:
   $id = 7;

   $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

   $nome = "Sofá";
   $descricao = "Sofá semi novo";

   $stmt->bind_param("ssi", $nome, $descricao, $id);

   $stmt->execute();

   if ($stmt->error) {
      echo "Erro: " . $stmt->error;
   }

?>