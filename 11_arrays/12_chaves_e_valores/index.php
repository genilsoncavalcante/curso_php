<?php

   $carro = [
      'marca' => 'BMW',
      'motor' => '2.4',
      'teto_solar' => true,
      'cambio' => 'Manual',
      'portas' => 4
   ];

   $chaves = array_keys($carro);//Pegando somente os chaves do array.

   print_r($chaves);
   echo "<br>";

   $values = array_values($carro);//Pegando somente os valores do array.

   print_r($values);
   echo "<br>";

?>