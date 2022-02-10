<?php

   //Em um escopo local, as variáveis não podem serem acessadas fora de sua função, e os seus valores são resetados quando saem delas 

   $x = 10;

   echo "$x global <br>";
   
   function teste() {
      $x = 5;

      echo "$x local <br>";
   }
   
   teste();

   echo "$x global <br>"; 

   function testando() {
      $x = 12;

      echo "$x local 2 <br>";
   }

   testando();
   teste();
   

?>