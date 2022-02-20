<?php

   class Pessoa {


      function falar($pessoa) {
         echo "Olá, eu sou o $pessoa! <br>";
      }
   }

   $genilson = new Pessoa;
   $genilson->falar("Genilson");

?>