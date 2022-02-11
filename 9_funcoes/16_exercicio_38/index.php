<?php

   $arr = ["banana", "maçã", "goiaba", "pera", "uva"];

   function arrayFormatado($arr) {

      $resultado = implode(", ", $arr);
      return $resultado;

   }

   echo arrayFormatado($arr);

?>