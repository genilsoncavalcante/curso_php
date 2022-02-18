<?php

   $frase = "Testando o explode";

   $fraseArray = explode(" ", $frase);

   print_r($fraseArray);
   echo "<br>";

   foreach ($fraseArray as $palavra) {
      echo $palavra . "<br>";
   }

?>