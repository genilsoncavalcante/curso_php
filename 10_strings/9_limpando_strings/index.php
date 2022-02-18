<?php

   $str1 = "      Genilson   ";
   echo "Esta é a string 1: $str1. <br>";
   
   $str1Limpa = trim($str1);//limpa todos os espaços antes e depois da string;
   
   echo "Esta é a string 1: $str1Limpa. <br>";

   $str1Limpa2 = rtrim($str1);

   echo "Esta é a string 1 $str1Limpa2. <br>";//limpa os espaços a direita;

   //sempre é importante limpar os espaços desnecessários antes de enviar os dados para o BD; 
?>