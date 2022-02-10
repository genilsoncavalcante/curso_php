<?php

   //Podemos criar uma variável e depois referenciar o valor dessa variável na memória em uma outra variável, mas dessa forma, se eu alterar o valor de qualquer uma delas, o valor referenciado na memória irá alterar o valor da outra variável.

   //EX:

   $x = 10;
   $y =& $x;

   echo $x;
   echo "<br>";
   echo $y;
   echo "<br>";


   $y = 15;

   echo "Atribuição após referência";
   echo "<br>";
   echo $x;
   echo "<br>";
   echo $y;
   echo "<br>";

   $x = 20;

   echo "Atribuição após referência 2";
   echo "<br>";
   echo $x;
   echo "<br>";
   echo $y;
   echo "<br>";
?>