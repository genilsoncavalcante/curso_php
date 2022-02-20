<?php

   class Humano {

   }
   class Animal {

   }

   $genilson = new Humano;
   $hipopotamo = new Animal;

   if ($genilson instanceof Humano) {
      echo "Ele é um Humano! <br>";
   } else {
      echo "Ele não é um Humano! <br>";
   }


   if ($genilson instanceof Animal) {
      echo "Ele é um Animal! <br>";
   } else {
      echo "Ele não é um Animal! <br>";
   }

?>