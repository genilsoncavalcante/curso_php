<?php
   // day / month / year

   $d = date('d/m/y'); 
   echo $d . "<br>"; // 20/02/22
   
   $d2 = date('D, M - Y'); 
   echo $d2 . "<br>"; // Sun, Feb - 2022

   $d3 = date('d, M - Y'); 
   echo $d3 . "<br>"; // 20, Feb - 2022

   $d4 = date('d/m/Y'); 
   echo $d4 . "<br>"; // 20/02/2022

   $d5 = date('l, F - Y'); 
   echo $d5 . "<br>"; // Sunday, February - 2022

?>