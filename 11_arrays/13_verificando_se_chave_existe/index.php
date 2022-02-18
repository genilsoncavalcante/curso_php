<?php

   $arr = [
      'nome' => 'Genilson',
      'idade' => 20
   ];

   if (array_key_exists("nomde", $arr)) {
      echo "A chave existe! <br>";
   } else {
      echo "A chave não existe! <br>";
   }

   //outra forma de verificação é com o isset();
   if (isset($arr['nome'])) {
      echo "A chave existe! ISSET <br>";
   } else {
      echo "A chave não existe! ISSET <br>";
   }
   //O ISSET também serve para variáveis.

?>