<?php

   $operacao = "5" * 12;

   echo $operacao . "<br>";

   echo gettype($operacao);//pega o tipo da variável.
   echo "<br>";
   echo gettype(12.2);
   echo "<br>";
   echo gettype([1,2,3]);
   echo "<br>";
   echo gettype("teste");

?>