<?php

   class Pessoa {
      
      function apresentar($nome, $idade) {
         echo "Olá, eu sou o $nome e tenho $idade anos. <br>";
      }
   }

   $genilson = new Pessoa;
   $genilson->apresentar("Genilson", 20);

?>