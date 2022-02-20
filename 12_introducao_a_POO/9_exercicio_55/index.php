<?php

   class Carro {
      
      public $cor;
      public $tetoSolar;
      public $velocidadeMaxima;

      function setVelocidadeMaxima($vel) {
         $this->velocidadeMaxima = $vel;
      }

      function getVelocidadeMaxima() {
         echo "A velocidade máxima do carro é $this->velocidadeMaxima k/h <br>";
      }
   }

   $bmw = new Carro;

   $bmw->cor = "Azul";
   $bmw->tetoSolar = true;
   
   $bmw->setVelocidadeMaxima(200);
   $bmw->getVelocidadeMaxima();

?>