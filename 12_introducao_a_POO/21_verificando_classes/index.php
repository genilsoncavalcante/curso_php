<?php

   class Humano {

      public $nome;
      public $idade;
      public $profissao;

      public function falar() {

      }

      public function andar() {

      }

   }

   if(class_exists("Humano")) {
      echo "A classe existe <br>";
   } else {
      echo "A classe não existe <br>";
   }

   //recebe um array com as propriedades da classe.
   print_r(get_class_vars("Humano"));

   echo "<br>";
   
   //retorna um array dos métodos da classe especificada.
   print_r(get_class_methods("Humano"));

?>