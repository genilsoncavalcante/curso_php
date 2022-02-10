<?php

   /*
   PARA O PHP, O CASE SENSITIVE NÃO É DANIFICA NA EXECUÇÃO DO PROGRAMA, PODE SER EM MAIÚSCULO, MINÚSCULO...
   PORÉM, PARA NOMES DE VARIÁVEIS ISSO PODE MUDAR:
   OU SEJA: $nome != $NOME
   */

   //NÃO TEM CASE SENSITIVE
   echo "Teste 1 <br>";
   eCHo "Teste 2 <br>";
   ECHO "Teste 3 <br>";

   //TEM CASE SENSITIVE
   $nome = "genilson";
   $NOME = "cavalcante";

   ECHO $nome;
   eCHo "<br>";
   echo $NOME;

?>