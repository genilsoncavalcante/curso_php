<?php

   function somar($a, $b) {

      print_r(func_get_args());//imprimir os argumentos da função
      echo "<br>";
      print_r(func_num_args());//imprimir a quantidade de argumentos
      return $a + $b;

   }

   somar(2, 8);

?>