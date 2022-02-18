<?php

   $coisasAleatorias = ['banana' => 6, 'chaveiro' => 30, 'armário' => 544, 'bicicleta' => 245, 'maçã' => 2];

   function retornarMaiorQueDez($coisasAleatorias) {

      echo "Os preços maiores que dez são: <br>";

      foreach ($coisasAleatorias as $preco) {
         if($preco > 10) {
            print_r(array_keys($coisasAleatorias, $preco));echo "preço = $preco";
            echo "<br>";
         }
      }

   }

   retornarMaiorQueDez($coisasAleatorias);

?>