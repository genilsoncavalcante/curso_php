<?php

   $host = "localhost";
   $dbname = "agenda";
   $user = "root";
   $pass = "";

   try {

      $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      //OBS: APÓS O ATRIBUTO $pass, DEFINIU-SE UM ARRAY QUE FORÇA O MYSQL A UTILIZAR O PADRÃO UTF-8.

      //Ativar o modo de erros
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
   } catch (PDOException $e) {
      //Erro na conexão
      $error = $e->getMessage();
      echo "Erro: $error";
   }

?>