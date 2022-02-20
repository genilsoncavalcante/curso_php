<?php

   class Car {

      public $rodas = 4;
      private $vidro = "Sem película";

      public function getVidro() {
         return $this->vidro;
      }

      public function peliculaDeFabrica($pelicula) {
         $this->vidro = $pelicula;
      }
      
   }

   class Mecanico {

      public function alterarRodas($carro) {
         $carro->rodas = 10;
      }

      public function colocarPelicula($carro, $pelicula) {
         $carro->vidro = $pelicula;
      }

   }

   $carro = new Car;
   $carro->peliculaDeFabrica("FF12");

   echo $carro->rodas . "<br>";
   
   $genilson = new Mecanico;
   
   $genilson->alterarRodas($carro);
   //Não pode alterar porque é privado:
   // $genilson->colocarPelicula($carro, "G20");

   echo $carro->rodas . "<br>";
   echo $carro->getVidro() . "<br>";

   //Visibilidade public todos veem e tem acesso;
   //Visibilidade protected permite que outras classes não tenham acesso a elas, somente classes relacionadas podem ter acesso, classes derivadas ou classes do mesmo pacote.
   //Visibilidade private, somente a própria classe pode ter acesso aos seus métodos e atributos que são declarados como privado.

?>