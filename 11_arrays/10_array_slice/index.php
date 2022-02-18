<?php

   $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

   $slice1 = array_slice($arr, 1, 3); //O array_slice() serve para pegarmos alguns elementos de um array, no primeiro parâmetro temos o arr que desejamos, no segundo parâmetros temos o índice onde queremos iniciar a captura dos elementos e por fim, informamos a quantidade de elementos que desejamos pegar. Caso eu omita o último parâmetro, eu irei pegar todos os elementos posteriores do array.
   
   print_r($slice1);
   echo "<br>";

?>