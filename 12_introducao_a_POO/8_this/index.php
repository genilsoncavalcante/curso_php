<?php

   class Animal {

      public $nome;

      function escolherNome($nome) {
         $this->nome = $nome;
      }

      function latir() {
         return "Au au <br>";
      }

      function latirForte() {
         return strtoupper($this->latir());
      }
      
   }
   
   $cachoro = new Animal;

   // echo "O nome do animal é $cachorro->nome <br>";//Não foi atribuído.
   
   $cachoro->escolherNome("Doguinho");
   
   echo "O nome do animal é $cachorro->nome <br>";

   echo $cachoro->latir();
   echo $cachoro->latirForte();

?>