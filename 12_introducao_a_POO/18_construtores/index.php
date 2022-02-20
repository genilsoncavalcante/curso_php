<?php

   class Car {

      public $portas;
      public $cor;
      public $marca;

      //sintaxe do método construtor:
      function __construct($portas, $cor, $marca) {

         $this->portas = $portas;
         $this->cor = $cor;
         $this->marca = $marca;

      }
   }

   $ferrari = new Car(4, "Preto", "Ferrari");
   echo $ferrari->marca . "<br>";
   echo $ferrari->cor . "<br>";

?>