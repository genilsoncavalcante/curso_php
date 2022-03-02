<?php

   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "cursophp";

   $conn = new mysqli($host, $user, $pass, $db);

   //Assunto da aula:
   $nome = "Suporte de microfone";
   $descricao = "O suporte é novo e foi fabricado na China";

   $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

   $stmt->bind_param("ss", $nome, $descricao);//OBS: os "ss" dois "s" significa os dois parâmetros com string.
   //s - para string, i - para integer, d - para double;

   $stmt->execute();

   //Essa forma de programar sql é mais interessante para a segurança em seu banco de dados, para que não haja sql injection, e deixar o seu BD vulnerável a comandos maliciosos.

?>