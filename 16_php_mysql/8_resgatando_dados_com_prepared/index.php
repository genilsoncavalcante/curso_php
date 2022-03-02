<?php

   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "cursophp";

   $conn = new mysqli($host, $user, $pass, $db);

   //Assunto da aula:
   $id = 2;

   $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

   $stmt->bind_param("i", $id);//i - para se referir a um dado inteiro;

   $stmt->execute();

   $result = $stmt->get_result();

   $data = $result->fetch_all();

   print_r($data);

?>