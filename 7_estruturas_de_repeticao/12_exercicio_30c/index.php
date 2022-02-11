<?php

   $arr = [];
   $arr_impares = [];

   for ($i = 10; $i <= 20; $i++) { 
      array_push($arr, $i);
      if ($i % 2 != 0) {
         array_push($arr_impares, $i);
      }
   }

   echo "Array: ";
   print_r($arr);
   echo "<br>";
   echo "Array de Impares: ";
   print_r($arr_impares);

?>