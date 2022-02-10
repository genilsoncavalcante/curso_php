<?php
   $numeroFloat = 1.2;

   echo $numeroFloat;

   //OBS: Números com ponto são interpretados como números flutuantes, números com vírgulas são ignorados a vírgula e são lidos como números inteiros.

   echo "<br>";
   echo 1,222;
   
   $verification = is_float($numeroFloat);
   $verification2 = is_float(3);
   echo "<br>";
   
   echo $verification;
   echo "<br>";
   echo $verification2;

?>