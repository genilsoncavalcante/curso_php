<?php

   $a = (int) "testando";
   echo "$a <br>";//retorna 0

   $b = (int) 12.9;
   echo "$b <br>";//retorna 12

   $c = (int) [3,1,3];
   echo "$c <br>";//retorna 1

   $d = (int) true;
   echo "$d <br>";//retorna 1

?>