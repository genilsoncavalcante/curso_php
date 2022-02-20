<?php

   class Car {

      public $rodas = 4;
      public $aro = 20;
      public $cor = "preto";

   }

   $ferrari = new Car;

   echo $ferrari->aro . "<br>";//Acessando propriedade;
   echo $ferrari->rodas . "<br>";
   $ferrari->cor = "Azul";//Atribuindo valor a propriedade;
   echo $ferrari->cor . "<br>";
?>