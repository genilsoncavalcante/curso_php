<?php

   $frase = "este item está em promoção";

   $arrPalavras = explode(' ', $frase);//quebrando a frase em palavras;

   print_r($arrPalavras);
   echo "<br>";
   
   for ($i = 0; $i < count($arrPalavras); $i++) { 
      if ($i == count($arrPalavras) - 1) {
         $arrPalavras[$i] = strtoupper($arrPalavras[$i]);
      }
   }

   print_r($arrPalavras);
   
   echo "<br>";

   $arrPalavras = implode(" ", $arrPalavras);
   echo $arrPalavras;


?>