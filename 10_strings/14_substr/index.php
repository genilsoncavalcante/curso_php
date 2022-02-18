<?php

   $str = "Esta é a minha string";

   $minha = substr($str, 10, 5);//Para pegarmos parte de uma string, informamos inicialmente a string desejada e depois colocamos de onde começar e depois de onde finalizar a partição para nossa substring.

   echo $str . "<br>";
   echo $minha . "<br>";

   $str2 = "Testando esta string abc";

   $novaString = substr($str2, 8); //Omitindo o terceiro parâmetro, ele começa onde foi informado e vai até o final.

   echo $novaString . "<br>";

   $novaString2 = substr($str2, 8, -3); //Com o último parâmetro negativo, ele acaba cancelando a imprensão dos últimos 3 caracteres neste caso.

   echo $novaString2 . "<br>";

?>