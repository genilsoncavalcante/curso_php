<?php

   $arr1 = [1,2,3];
   $arr2 = [2,4,6];

   //mostra a diferença dos arrays, no caso acima, seria a intersecção do número 2, que está presente nos dois arrays.
   $diff = array_diff($arr1, $arr2);

   print_r($diff);
   echo "<br>";

?>