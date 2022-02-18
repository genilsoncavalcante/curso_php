<?php

   $arr = [
      'cor' => 'vermelho',
      'forma' => 'circular',
      'material' => 'aço'
   ];

   extract($arr);//com o extract, podemos criar variáveis com os nomes das chaves ou valores e utilizar os seus valores com as mesmas.
   
   echo "$cor <br>";
   echo "$forma <br>";
   echo "$material <br>";

?>