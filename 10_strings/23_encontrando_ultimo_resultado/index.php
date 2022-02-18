<?php

   $str = "Esta frase tem a palavra teste aqui, e uma outra palavra teste aqui.";

   $palavra = strrpos($str, "teste");

   echo "$palavra <br>"; //O strrpos serve para encontrar a última ocorrência de uma palavra, caso a string possua mais de uma.

?>