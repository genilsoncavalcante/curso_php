<?php

   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "cursophp";

   $conn = new mysqli($host, $user, $pass, $db);

   //Assunto da aula:

   $table = "itens";
   $nome = "Xícara";
   $descricao = "É uma xícara usada de cor rosa";

   //OBS: Para que seja inserido no BD, deve-se colocar as variáveis entre aspas simples.
   $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

   $conn->query($q);
   $conn->close();

?>