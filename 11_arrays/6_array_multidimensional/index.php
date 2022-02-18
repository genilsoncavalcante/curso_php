<?php

   $arrDimensional = [
      [1,2,3],
      [2,4,6]
   ];

   print_r($arrDimensional);
   echo "<br>";

   echo $arrDimensional[0][1] . "<br>";//Acessando o primeiro array, elemento 2;
   echo $arrDimensional[1][2] . "<br>";//Acessando o segundo array, elemento 3;

   echo count($arrDimensional) . "<br>";
   echo count($arrDimensional[0]) . "<br>";
   echo count($arrDimensional[1]) . "<br>";

?>