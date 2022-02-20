<?php

   abstract class Teste {

      //Com classes abstratas, seus métodos também precisam ser abstratos.
      public static function testandoClasse() {

         echo "Este método é de uma classe abstrata <br>";

      }
   }

   //Em uma classe abstrata, não podemos acessá-la instanciando-a.
   // $t = new Teste;

   Teste::testandoClasse();//É essa forma que acessamos uma classe abstrata.

?>