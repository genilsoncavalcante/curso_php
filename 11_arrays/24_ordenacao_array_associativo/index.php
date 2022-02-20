<?php

   $arr = [
      'Geovano' => 26,
      'Genilson' => 20,
      'Germano' => 16,
      'Vitória' => 15
   ];

   //ordenando array associativo de forma crescente:
   asort($arr);

   print_r($arr);
   echo "<br>";

   $arr2 = [
      'Germano' => 16,
      'Genilson' => 20,
      'Geovano' => 26,
      'Vitória' => 15
   ];

   //ordenando array associativo de forma decrescente:
   arsort($arr2);

   print_r($arr2);
   echo "<br>";

   //ordenando o array pelos valores das chaves de forma crescente:
   ksort($arr2);

   print_r($arr2);
   echo "<br>";

   //ordenando o array pelos valores das chaves de forma decrescente:
   krsort($arr2);

   print_r($arr2);
   echo "<br>";
?>