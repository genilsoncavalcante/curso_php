<?php

   interface Caracteristicas {

      const nome = "Genilson";

      public function falar();

   }

   class Humano implements Caracteristicas {

      public $idade = 20;

      public function falar() {
         echo "Olá Mundo! <br>";
      }

      public function dizerNome() {
         echo "Meu nome é " . self::nome . "<br>";
      }

   }

   $genilson = new Humano;
   $genilson->falar();
   $genilson->dizerNome();
?>