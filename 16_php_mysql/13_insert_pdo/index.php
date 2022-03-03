<?php

   $host = "localhost";
   $db = "cursophp";
   $user = "root";
   $pass = "";

   $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

   //Assunto da aula:

   $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

   $nome = "Suporte monitor";
   $descricao = "O suporte está novo e ainda dentro da caixa";

   $stmt->bindParam(":nome", $nome);
   $stmt->bindParam(":descricao", $descricao);

   $stmt->execute();

?>