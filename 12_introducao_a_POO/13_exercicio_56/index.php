<?php

   class Humano {

      public const BRACOS = 2;
      public const PERNAS = 2;
      public const ORELHAS = 2;
      public const NARIZ = 1;

      public function falar() {
         echo "Olá <br>";
      }
   }

   class Professor extends Humano {

      public $salario;
      public $aulas;

      public function verTotalDeAulasSemanais($aulas) {
         echo "Eu leciono $aulas aulas por semana";
      }
   }

   $genilson = new Humano;
   $genilson->falar() . "<br>";
   echo $genilson::BRACOS;

?>