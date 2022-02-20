<?php

   class Cachorro {

      public $nome;
      public $raca;
      public $cor;

      function __construct($nome, $raca, $cor) {
         
         $this->nome = $nome;
         $this->raca = $raca;
         $this->cor = $cor;

      }

      public function apresentarAnimal() {

         echo "O nome do cachorro é $this->nome, ele é da raça $this->raca e é da cor $this->cor <br>";

      }
   }

   $pitBull = new Cachorro("Dog", "PitBull", "Branco");
   $pitBull->apresentarAnimal();


?>