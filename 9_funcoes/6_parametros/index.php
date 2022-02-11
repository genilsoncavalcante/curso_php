<?php

   function velocidadeMax($vel) {

      if(is_int($vel)) {
         echo "O carro atinge a velocidade de $vel km/h <br>";
      } else {
         echo "Por favor, digite um número inteiro <br>";
      }

   }

   velocidadeMax(200);

   $velocidadeFerrari = 300;
   velocidadeMax($velocidadeFerrari);

   velocidadeMax("palavra")

?>