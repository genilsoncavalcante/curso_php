<?php

   //Função própria do PHP que verifica se é int;
   $isInt = is_int("5");
   echo $isInt;
   echo "<br>";

   if ($isInt) { //true
      echo "É um número inteiro";
   } else { //false
      echo "Não é um número inteiro";
   }
   
?>