<?php

   $animal = "cobra";
   $tipo = "cascavel";
   $cor = "preta";

   $animal = compact("animal", "tipo", "cor");

   print_r($animal);
   echo "<br>";

   foreach ($animal as $caracteristicas) {
      echo $caracteristicas . "<br>";
   }

?>