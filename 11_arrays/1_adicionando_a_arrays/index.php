<?php

   $arr = [];

   print_r($arr);
   echo "<br>";

   //Adicionado Valores
   $arr[0] = 10;
   $arr[1] = 15;

   print_r($arr);
   echo "<br>";
   
   //Modificando Valores
   $arr[0] += 55;
   $arr[1] += 60;
   
   print_r($arr);
   echo "<br>";
   
   //Array Associativo
   $arrAssoc = [];
   
   print_r($arrAssoc);
   echo "<br>";
   
   $arrAssoc["carro"] = "BMW";
   $arrAssoc["avião"] = "Boeing";
   
   print_r($arrAssoc);
   echo "<br>";
   
   //Modificando Array Associativo
   $arrAssoc["carro"] = "Ferrari"; 


   print_r($arrAssoc);
   echo "<br>";

?>