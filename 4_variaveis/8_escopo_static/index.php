<?php

   function teste() {
      
      $a = 0;
      $a++;

      echo "$a <br>";

   }

   teste();
   teste();
   teste();

   function testeStatic() {

      //OBS: O valor de um STATIC é mantido e não resetado, podendo assim ser adicionado, decrementado...

      static $a = 0;
      $a++;

      echo "$a <br>";

   }

   testeStatic();
   testeStatic();
   testeStatic();

?>