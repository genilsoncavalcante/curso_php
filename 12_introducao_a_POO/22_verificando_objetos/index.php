<?php

   class Humano {

      public function falar() {
         echo "Olá <br>";
      }

   }

   $genilson = new Humano;
   $teste = 10;

   if (is_object($genilson)) {
      echo "É um objeto <br>";
   } else {
      echo "Não é um objeto <br>";
   }

   if (is_object($teste)) {
      echo "É um objeto <br>";
   } else {
      echo "Não é um objeto <br>";
   }

   echo get_class($genilson) . "<br>";

   if(method_exists($genilson, "falar")) {
      echo "Método Existe <br>";
   } else {
      echo "Método Não Existe <br>";
   }

?>