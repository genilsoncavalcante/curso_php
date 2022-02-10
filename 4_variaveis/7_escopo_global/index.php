<?php

   $teste = "TEXTO1";

   echo "$teste global 1 <br>";

   //OBS: O escopo global afeta blocos de códigos que não sejam funções, como por exemplo, um IF:
   if(true) {

      $teste = "TEXTO2";

      echo "$teste if <br>";

   }

   echo "$teste global 2 <br>";

   function testando() {
      $teste = "TEXTO3 dentro de uma função, escopo local <br>";
      echo $teste;
   }

   testando();

   function testandoGlobal() {
      //OBS: Para podemos utilizar a variável global dentro de um escopo local de uma função, devemos chamá-la com uma palavra reservada, "global";

      global $teste;
      echo "$teste global função <br>";
   }

   echo testandoGlobal();


   function alterandoValorGlobal() {
      //podemos acessar a variável global e ainda alterarmos o seu valor dentro de um escopo local para se permanecer um valor global.

      global $teste;
      $teste = "Alterado dentro do escopo local!!!";
      echo "$teste - escopo local <br>";
   }

   alterandoValorGlobal();

   echo "$teste - escopo global <br>";

?>