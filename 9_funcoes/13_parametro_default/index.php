<?php

   function teste($a = "VALOR-DEFAULT") {

      echo "O valor de A é: $a <br>";

   }

   echo teste();

   //UMA BOA PRÁTICA É COLOCAR OS ARGUMENTOS DEFAULT SEMPRE POR ÚLTIMO:
   function testando($b, $a = "x") {

      echo "O valor de a é: $a e de b é: $b <br>";

   }
   testando("1");//inserido ao valor $b;
   testando("1", "2")//inserindo primeiro no $b e sobre-escrevendo o valor default $a;

   //A ideia é que sempre os primeiros parâmetros sejam os obrigatórios, pois esses precisam ser inseridos, e os default, devem ser os últimos.
?>