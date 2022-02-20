<?php

   class Humano {

      public $idade = 20;

      public function falar() {
         echo "Olá Mundo! <br>";
      }

      private function gritar() {
         echo "PHP É MUNDO BOM! <br>";
      }

      public function acessarGritar() {
         $this->gritar();
      }

      protected function falarBaixinho() {
         echo "lalalala <br>";
      }

      public function acessarFalarBaixinho() {
         $this->falarBaixinho();
      }
   }

   class Programador extends Humano {

      public function acessarFalarBaixinhoProgramador() {
         $this->falarBaixinho();//Consegue acessar o método protected, porque este método deixa a sua visibilidade para suas classes adjacentes, neste caso essa classe que herda da classe Humano.
      }

   }

   $genilson = new Humano;
   $genilson->falar();
   $genilson->acessarGritar();
   $genilson->acessarFalarBaixinho();
   
   $germano = new Programador;
   echo $germano->idade = 16 . "<br>"; 
   $germano->falar();
   $germano->acessarGritar();
   $germano->acessarFalarBaixinhoProgramador();

?>