<?php

   /*
   Em PHP podemos ter uma forma de sobre-escrever uma variável com uma outra variável, usando o $$; dessa forma, para poder acessá-la, temos que pegar o nome do valor da anterior.
   */

   $x = "nome";//valor da variável
   
   echo "$x <br>";

   $$x = "Genilson";//variável de x (nome), com o valor de Genilson

   echo "$nome <br>";

?>