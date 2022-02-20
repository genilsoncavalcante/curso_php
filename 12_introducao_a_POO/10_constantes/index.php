<?php

   class Humano {

      //A declaração de constantes não se usam o símbolo $(cifrão).
      public const OLHOS = 2;
      public const BRACOS = 2;
      public const PERNAS = 2;

      function mostrarConstante() {

         //Para referenciar o método .this para constantes, envés de seu uso, utilizamos o self e depois o ::, para acessar a variável da própria classe.
         echo self::BRACOS . "<br>";

      }

   }

   //Para acessar uma constante, usamos o :: e não a ->, veja:

   $genilson = new Humano;

   echo $genilson::OLHOS . "<br>";
   echo $genilson->mostrarConstante();

?>