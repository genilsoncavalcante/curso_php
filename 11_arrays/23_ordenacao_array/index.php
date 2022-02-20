<?php

   $arr = [3, 4, 434, 211, 33, 23];

   //ordenando o array:
   sort($arr);
   
   print_r($arr);
   echo "<br>";

   //ordenando o array de forma decrescente:
   rsort($arr);

   print_r($arr);
   echo "<br>";

   $letras = ['B', 'A', 'F', 'C', 'D', 'E', 'G'];
   //ordenando o array de strings:
   sort($letras);
   
   print_r($letras);
   echo "<br>";

   //ordenando o array de strings de forma decrescente:
   rsort($letras);

   print_r($letras);
   echo "<br>";


?>