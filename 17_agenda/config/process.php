<?php

   ini_set('default_charset', 'utf-8');//Definindo a conexão para o tipo de caracteres UTF-8

   session_start();

   include_once("connection.php");
   include_once("url.php");

   $contacts = [];


   $query = "SELECT * FROM contacts";

   $stmt = $conn->prepare($query);

   $stmt->execute();

   $contacts = $stmt->fetchAll();

?>