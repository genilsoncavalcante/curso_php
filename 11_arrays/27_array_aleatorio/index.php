<?php

   $arr = range(1, 10);

   print_r($arr);
   echo "<br>";

   shuffle($arr);//organizar o array de forma aleatória, e esse método altera a estrutura original do array

   print_r($arr);
   echo "<br>";

?>