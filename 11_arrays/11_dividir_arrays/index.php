<?php

   //Dividindo um array em outros arrays menores.

   $arr = range(1, 20);

   $arrays = array_chunk($arr, 4);//dividindo o array em quatro arrays.

   print_r($arrays);
   echo "<br>";
   
   print_r($arrays[0]);
   echo "<br>";
   print_r($arrays[1]);
   echo "<br>";
   print_r($arrays[2]);
   echo "<br>";
   print_r($arrays[3]);
   echo "<br>";

?>