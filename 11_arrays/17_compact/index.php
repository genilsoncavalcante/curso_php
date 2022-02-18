<?php

   $marca = "Ferrari";
   $motor = "3.4";
   $teto_solar = true;
   $portas = 6;

   //Se temos a forma de através de um array associativo acessar os valores criando variáveis através do extract, temos também o modo contrário, criar um array associativo através das variáveis:

   $carro = compact("marca", "motor", "teto_solar", "portas");

   print_r($carro);

?>