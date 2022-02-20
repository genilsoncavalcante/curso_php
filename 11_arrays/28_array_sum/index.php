<?php

   $arr = range(1, 10);

   //soma todos os elementos numéricos de um array, se existir string, a string é ignorada.
   $soma_do_array = array_sum($arr);

   echo $soma_do_array . "<br>";

?>