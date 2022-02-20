<?php

   //trait são uma outra forma de se criar classes, com elas podemos estender para outras classes usando o (use), é uma forma de não precisarmos de só ficar estendendo as nossas classes e aumentando a ramificação da herança, dessa forma, podemos usar as trait's para não nos perdermos, e quando tivermos precisando usar uma classe, é só usarmos ela.
   trait Objeto {

      public function teste() {
         echo "Testando trait de objeto <br>";
      }

   }

   trait Testando {

      public $y = 10;

      public function traitTeste() {
         echo "Este método é da trait Testando <br>";
      }

   }

   class Central {

      use Objeto;
      use Testando;

   }

   $x = new Central;
   $x->teste();
   $x->traitTeste();
   echo $x->y . "<br>";

?>