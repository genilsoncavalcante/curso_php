<?php

   $contador = 0;
   $str = "O rato roeu a roupa do rei de roma";

   for ($i = 0; $i < strlen($str); $i++) { 
      if ($str[$i] === "a") {
         $contador++;
      }
   }
   echo "A frase possui $contador letras (a)'s";
?>