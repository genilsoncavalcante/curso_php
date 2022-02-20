<?php

   $arr = [1,2,3,1,3];

   //reduce, serve para reduzir um array em apenas um valor.
   function soma($a, $b) {
      return $a + $b;
   }

   $resultado = array_reduce($arr, "soma");

   echo "$resultado <br>";

?>