<?php

   //Não podemos fazer herança em uma classe anônima;
   $pessoa = new class() {

      public $nome = "Genilson";

      public function dizerNome() {
         echo "Olá meu nome é $this->nome <br>";
      }

   };

   echo $pessoa->nome . "<br>";
   $pessoa->dizerNome();

?>