<?php

   $arr = [
      "Teste",
      123,
      3.4,
      true,
      [1,2,3]
   ];

   print_r($arr);
   echo "<br>";
   var_dump($arr);
   //Geralmente é preferível o var_dump entre os programadores, pois esse trais um formato de leitura mais humanizado, além de trazer mais informações detalhadas sobre o tipo de array que estamos lidando, a quantidade de elementos que esse array possui e o tipo de dado de cada um dos elementos dentro do array, essas informações podem ser vista pelo var_dump() e não pelo print_r();
?>