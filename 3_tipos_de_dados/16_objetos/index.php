<?php

   class Pessoa {
      function falar() {
         echo "Olá pessoal!";
      }
   }

   $genilson = new Pessoa();

   $genilson->nome = "Genilson Cavalcante"; //criando característica para $genilson;

   echo $genilson->nome;

   echo "<br>";

   $genilson->falar();//invocando o método falar();

?>